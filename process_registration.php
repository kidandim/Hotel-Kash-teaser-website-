<?php
include 'dblogin.php';//You can also use  require_once

$fname = $_POST['fName'];
$lname = $_POST['lName'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$nationality = $_POST['nationality'];            
$phoneno = $_POST['phone'];



//preparing the sql query  inserting
$sql = mysql_query("insert into guest(fname,lname,gender,email,nationality,phone) values('".$fname."','".$lname."','".$gender."','".$email."','".$nationality."','".$phoneno."')") or die(mysql_error());
//inserting the data in to the database

$select = "select * from guest";
$result = mysql_query($select);


$rows = mysql_num_rows($result);

for ($j = 0 ; $j < $rows ; ++$j)
{
echo 'firstname: ' . mysql_result($result,$j,'fname') . '<br>';
echo 'lastname: ' . mysql_result($result,$j,'lname') . '<br>';
echo 'gender: ' . mysql_result($result,$j,'gender') . '<br>';
echo 'email: ' . mysql_result($result,$j,'email') . '<br>';
echo 'nationality: ' . mysql_result($result,$j,'nationality') . '<br>';
echo 'phone: ' . mysql_result($result,$j,'phone') . '<br><br>';
}

if($sql)
{
header('location:process_signin.php');
}

else{
 echo "data was not inserted successfull" or die(mysql_error());
 }

?>
