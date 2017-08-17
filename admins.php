<?php 

require_once 'dblogin.php';

$con = mysql_connect($server, $host, $pass);


if(!$con){
	die("Noconnection: ". mysql_error());}
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$role = $_POST['role'];

	if(isset($_POST['add'])){
		$Addquerry = "INSERT INOT staff (fname, lname, gender, role) values ('$_POST[fname]', '$_POST[lname]', '$_POST[gender]', '$_POST[role]')";
		mysql_query($Addquerry, $con);
	};
mysql_close($con);

        ?>