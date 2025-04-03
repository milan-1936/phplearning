<?php
// super global variable
    // $_GET method -> this method is not secure, but fast
    // $_POST method -> this method is secure but bit slower than $_GET method

// Get method le data lai url ma bind garera pathauxa which is not safe
//
    $a=$_GET['name'];
    $b = $_GET['address'];

    // Database Connectivity
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "newdb";

    $conn = new mysqli($servername, $username, $password, $dbname)or die("cannot connect to database");
    if($conn){
        echo "Database Connected Successfully with database name ". $dbname;
    }

    
// SQL Query build
    $sql = "Insert into student(name, address) values ('$a', '$b')";

    // SQL Query execute
    if($conn->query($sql)){
        echo "Data inserted succesfully";
    }
    
?>