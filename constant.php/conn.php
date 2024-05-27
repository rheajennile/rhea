<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "inventory";

$link = mysqli_connect($server, $user, $pass, $database);

if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
?>