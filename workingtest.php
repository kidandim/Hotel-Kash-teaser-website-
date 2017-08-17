<!Doctype html>
<head></head>
<body>
<?php

$con = mysql_connect("localhost", "root", "");
if (!$con) {
  die("Can not Connect: " .mysql_error());
}
mysql_select_db("kashhoteldb",$con);

if (isset($_POST['update'])) {
$update = "UPDATE guest SET fname='$_POST[fname]', lname='$_POST[lname]', gender='$_POST[gender]', email='$_POST[email]', nationality='$_POST[nationality]', phone='$_POST[phone]' where idguest = $_POST[hidden]";

mysql_query($update, $con);


}

$sqlx = "Select * FROM guest";
$myData = mysql_query($sqlx, $con);
echo "<table border= 1px >
<tr>
<th>Number</ht>
<th>First Name</ht>
<th>Last Name</ht>
<th>Gender</ht>
<th>Email</ht>
<th>Nationality</ht>
<th>Phone Number</ht>
</tr>";

while ($record = mysql_fetch_array($myData)) 
{


  echo "<tr>";
  echo "<td>" . $record['idguest'] ."</td>";
  echo "<td>" . $record['fname'] ."</td>";
  echo "<td>" . $record['lname'] ."</td>";
  echo "<td>" . $record['gender'] ."</td>";
  echo "<td>" . $record['email'] ."</td>";
  echo "<td>" . $record['nationality'] ."</td>";
  echo "<td>" . $record['phone'] ."</td>";
  echo "</tr>"; 
  }
  echo "</table>";

?>
</body>
</html>

