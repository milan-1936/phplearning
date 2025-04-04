<?php
$filename = $_FILES['file']['name'];
$fileTemp = $_FILES['file']['tmp_name'];
//size
//full_path
//type
//error


//SuperGlobals
//    $_FILES,
//    $_GET,
//    $_POST,
//    $_SERVER
//    $_SESSION
////takes string as input and convert it into array based on the separator
////milan.poudel
//$myname = explode('.', 'milan.poudel');
////output -> $myname = ['milan', 'poudel'];
//
//$file_extension = explode('.', $filename);
//$file_extension = end($file_extension);
//// poudel

//$fileExtension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    $fileDestination = "images/" . "anubhav ko photo.jpg";

    if (move_uploaded_file($fileTemp, $fileDestination)) {
        echo "Your file was uploaded and can be found at <strong>$fileDestination</strong><br>";
        echo "<img src='$fileDestination' alt='Uploaded Image' width='300'>";
    } else {
        echo "There was an error uploading the file.";

}
?>
