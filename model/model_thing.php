<?php
class thing{

function select()
{
$database = new database();
$database->connect();
$result = mysql_query("SELECT * FROM thing");

echo "<table border='1'>
<tr>
<th>���</th>
<th>��Ŀ����</th>
<th>ʱ��</th>
<th>������</th>
<th>���ʱ��</th>
<th>����״̬</th>
<th>��ע</th>
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
  echo "<td>" . '������'. "</td>";
    echo "<td>" . $row['remark'] . "</td>";
  echo "</tr>";
  }
  echo "</table>";
$database->close();
}




}







?>
