<?php
$username = $_POST["username"];
$password = $_POST["password"];
//starting the session
session_start();

if($username == "admin" && $password == "admin"){
    $_SESSION["username"] = $username;
    header("location: admin.php");
}else{
    $_SESSION["username"]= $username;
    header("location: user.php");
}