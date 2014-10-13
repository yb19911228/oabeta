<?php session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.0.js">
</script>
<title>OA</title>
<style type="text/css">
#oamaintop{height:80px; width:1150px; background-color:#99FFFF;}
#oamaintopright{height:30px; width:200px; float:right; margin-top:-40px;}
#oamainleft{height:800px; width:200px; background-color:#99CCFF;float:left;}
#oamainright{height:800px; width:950px; background-color:#99CCCC; float:left; }
#oamain{height:900px; width:1150px;float:left; margin-left:380px;}
.oamainbutton{width:180px; height:30px; margin-bottom:0px; margin-left:10px;}
</style> 
</head>

<body>
<div id="oamain">
<div id="oamaintop">
<h1 style="margin-top:20px;">送菜君办公管理系统</h1>
<div id="oamaintopright">
<p>欢迎你，<?php echo $_SESSION['uname'];?> <a href="/oa/control/exit.php">退出</a></p>
</div>
</div>
 <div id="oamainleft" >
<br />
<button class="oamainbutton" id="b1" type="button">财务管理</button>
<button class="oamainbutton" id="b2" type="button">项目进度管理</button>
<button class="oamainbutton" id="b3" type="button">固定资产管理</button>
<button class="oamainbutton" id="b4" type="button">供应链管理</button>
<button class="oamainbutton" id="b5" type="button">在线审批</button>
<button class="oamainbutton" id="b6" type="button">用户管理</button>
<button class="oamainbutton" id="b7" type="button">通知</button>
</div>

<script type="text/javascript">
$(document).ready(function(){
  $(".pmain1").hide();$(".pmain2").hide();$(".pmain3").hide();$(".pmain4").hide();$(".pmain5").hide();$(".pmain6").hide();$(".pmain7").hide();
  $("#b1").click(function(){
   $(".pmain1").hide();$(".pmain2").hide();$(".pmain3").hide();$(".pmain4").hide();$(".pmain5").hide();$(".pmain6").hide();$(".pmain7").hide();
  $(".pmain1").show();
  });
  
    $("#b2").click(function(){
    $(".pmain1").hide();$(".pmain2").hide();$(".pmain3").hide();$(".pmain4").hide();$(".pmain5").hide();$(".pmain6").hide();$(".pmain7").hide();
  $(".pmain2").show();
  });
  
      $("#b3").click(function(){
    $(".pmain1").hide();$(".pmain2").hide();$(".pmain3").hide();$(".pmain4").hide();$(".pmain5").hide();$(".pmain6").hide();$(".pmain7").hide();
  $(".pmain3").show();
  });
  
      $("#b4").click(function(){
    $(".pmain1").hide();$(".pmain2").hide();$(".pmain3").hide();$(".pmain4").hide();$(".pmain5").hide();$(".pmain6").hide();$(".pmain7").hide();
  $(".pmain4").show();
  });
  
      $("#b5").click(function(){
    $(".pmain1").hide();$(".pmain2").hide();$(".pmain3").hide();$(".pmain4").hide();$(".pmain5").hide();$(".pmain6").hide();$(".pmain7").hide();
  $(".pmain5").show();
  });
  
      $("#b6").click(function(){
   $(".pmain1").hide();$(".pmain2").hide();$(".pmain3").hide();$(".pmain4").hide();$(".pmain5").hide();$(".pmain6").hide();$(".pmain7").hide();
  $(".pmain6").show();
  });
  
      $("#b7").click(function(){
    $(".pmain1").hide();$(".pmain2").hide();$(".pmain3").hide();$(".pmain4").hide();$(".pmain5").hide();$(".pmain6").hide();$(".pmain7").hide();
  $(".pmain7").show();money();
  });
  

  
});


  function money()
  {
 alert("ere");
  }
</script>

<div id="oamainright">


</div>
<p></p>
<p align="center">送菜君2014 版权所有</p>
</div>
</body>
</html>
