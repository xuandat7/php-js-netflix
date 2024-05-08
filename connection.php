<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "123456";
$dbname = "netflix-clone";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
