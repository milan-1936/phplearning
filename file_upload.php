<?php
$filename = $_FILES['file']['name'];
$filetype = $_FILES['file']['type'];
$filesize = $_FILES['file']['size'];
$fileTemp = $_FILES['file']['tmp_name'];

$fileExtension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

if ($fileExtension != 'jpg') {
    die("Sorry, only JPG files are allowed.");
} else {
    $fileDestination = "images/" . $filename;

    if (move_uploaded_file($fileTemp, $fileDestination)) {
        echo "Your file was uploaded and can be found at <strong>$fileDestination</strong><br>";
        echo "<img src='$fileDestination' alt='Uploaded Image' width='300'>";
    } else {
        echo "There was an error uploading the file.";
    }
}
?>
