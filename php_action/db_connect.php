<?php

$localhost = "localhost";
$username = "root";
$password = "root";
$dbname = "inventorydb";

$connect = new mysqli("localhost", "root", "", "inventorydb");

if($connect->connect_error) {
	die("Connection Failed : " . $connect->connect_error);
} else {
}

?>