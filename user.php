<?php
session_start();
if(!isset($_SESSION["username"])){
    header("location:login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <title> UserPage</title>
    </head>
<body>
    <h1 class="text-blue-500">Hello <?= $_SESSION["username"]?> </h1>
    <form action="logout.php">
        <input type="submit" value="Log Out">
    </form>
</body>
</html>

<??>