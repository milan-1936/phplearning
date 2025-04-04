<?php
session_start();

?>

<html>
    <head>
        <title>
            Admin Dashboard
        </title>
    </head>
    <body>
        <h1>Your name is <?= $_SESSION["username"]?></h1>
        <form action="logout.php">
          <input type="submit" value="Log Out">

        </form>
    </body>
</html>