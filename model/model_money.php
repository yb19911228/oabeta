<?php
class money{

function select()
{
$database = new database();
$database->connect();
$result = mysql_query("SELECT * FROM money");
echo "<table border='1'>
<tr>
<th>序号</th>
<th>类型</th>
<th>名称</th>
<th>时间</th>
<th>数量</th>
<th>经办人</th>
<th>备注</th>
</tr>";


while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['no'] . "</td>";
  if($row['type']=='-1')
  echo "<td>" . '支出' . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['time'] . "</td>";
  echo "<td>" . $row['amount'] . "</td>";
  echo "<td>" . $row['person'] . "</td>";
    echo "<td>" . $row['remark'] . "</td>";
  echo "</tr>";
  }
   echo "</table>";
$database->close();
}

}

class database{
function connect()
{
$con = mysql_connect("121.40.81.9","root","504hslyb");
mysql_select_db("manage", $con);
mysql_query('SET NAMES gbk');
}

function close()
{
mysql_close($con);
}

}




?>
