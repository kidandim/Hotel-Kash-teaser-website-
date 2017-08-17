<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$role = $_POST['role'];



$sql = mysql_query("insert into staff(fname,lname,gender,role) values('".$fname."','".$lname."','".$gender."','".$role."')") 

or die(mysql_error());

mysql_select_db($db);

?>
