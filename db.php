<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";

$mysql = mysqli_connect($servername, $username, $password, $dbname);

if (!$mysql) {
    echo "Connection failed: " . mysqli_connect_error();
}
