<?php

$user = 'root';
$pass = '';
$db = 'reservdb';

$db = new mysqli('localhost', $user, $pass, $db) or die('unable to connect');

echo'great work!!!!';
?>
