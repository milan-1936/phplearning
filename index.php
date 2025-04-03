<?php
    // Database Connectivity
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "newdb";

    $conn = new mysqli($servername, $username, $password, $dbname)or die("cannot connect to database");
    if($conn){
        echo "Database Connected Successfully with database name ". $dbname;
    }

    $sql = "Insert into student(name, address) values ('Milan', 'dEvchuli-2')";
    if($conn->query($sql)){
        echo "Data inserted succesfully";
    }
    
?>