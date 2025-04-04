<?php
$username = $_POST["username"];
$password = $_POST["password"];

if($username == "admin" && $password == "admin"){
    header("location: admin.php");
}else{
    header("location: user.php");
}