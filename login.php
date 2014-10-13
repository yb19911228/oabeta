<?php
session_start();
$postname=$_POST["name"];
$postpassword=$_POST["password"];
echo $postname.$postpassword;
$con = mysql_connect("121.40.81.9","root","504hslyb");


mysql_select_db("manage", $con);
mysql_query('SET NAMES gbk');
$result = mysql_query("SELECT no,name FROM user WHERE username='$postname' and password='$postpassword'");

while($row = mysql_fetch_array($result))
  {
  echo $row['no'];
  $no=$row['no'];
  echo $row['name'];
  $uname=$row['name'];
  }
  
  if($no!='')
  {
 echo "succeed!";
 $_SESSION['uid']=$no;
 $_SESSION['uname']=$uname;
echo "<script language='javascript'>document.location = 'view/main.php'</script>";
 
  } 
 else 
 {
 echo"ÕËºÅ»òÃÜÂë´íÎó£¬ÇëÖØĞÂµÇÂ½£¡";
 echo "<script language='javascript'>document.location = 'index.html'</script>";
  }
mysql_close($con);
?>
