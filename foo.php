<?php

include_once 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$id = (int)$_POST['id'];

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

//Update

if (isset($_POST['edit'])) {

    $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";
    $mysql = mysqli_query($mysqli, $sql);

    if ($mysql) {
        header('Location: index.php');
    }
}

//Delete

if(isset($_POST['delete'])){
    $sql = "DELETE FROM users WHERE id=$id";
    $mysql = mysqli_query($mysqli, $sql);

    if ($mysql) {
        header('Location: index.php');
    }
}