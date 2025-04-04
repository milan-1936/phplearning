<?php
$username = $_POST["username"];
$password = $_POST["password"];
//starting the session
session_start();
$_SESSION["username"] = $username;


if($username == "admin" && $password == "admin"){
    header("location: admin.php");
}else{
    header("location: user.php");
}