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

$sql = "SELECT * FROM users";
$result = $mysqli->query($sql);

