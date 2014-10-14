<?php
class thing{

function select()
{
$database = new database();
$database->connect();
$result = mysql_query("SELECT * FROM thing");

echo "<table border='1'>
<tr>
<th>序号</th>
<th>项目名称</th>
<th>时间</th>
<th>经办人</th>
<th>完成时间</th>
<th>跟进状态</th>
<th>备注</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
echo "<tr>";
  echo "<td>" . $row['no'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['starttime'] . "</td>";
  echo "<td>" . $row['person'] . "</td>";
  echo "<td>" . $row['finashtime'] . "</td>";
  if($row['situation']=='1')
  echo "<td>" . '进行中'. "</td>";
    echo "<td>" . $row['remark'] . "</td>";
  echo "</tr>";
  }
  echo "</table>";
$database->close();
}




}







?>
