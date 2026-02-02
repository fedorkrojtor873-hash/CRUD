<?php

include_once 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$get_id = $_GET['id'];

//Create
$mysqli = new mysqli('localhost', 'root', '', 'crud');

if(isset($_POST['add'])){;
    $sql = "INSERT INTO users (name, email) 
        VALUES ('$name', '$email')";
   $mysql = mysqli_query($mysqli, $sql);
    if($mysql)
    {
        header('location: index.php');
    }
}

//Read

$sql1 = "SELECT * FROM users";
$mysql = mysqli_query($mysqli, $sql1);
$result = mysqli_fetch_all($mysql, MYSQLI_ASSOC);


