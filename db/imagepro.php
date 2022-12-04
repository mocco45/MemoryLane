<?php
include "db_conn.php";
$eid=$_POST['eid'];
$target_dir = "../img/slide/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
	header("Location: ../event.php?error=File already Exists.");
  //echo "Sorry, file already exists.";
  $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
	header("Location: ../event.php?error=Sorry, your File is too Large.");
  //echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
	header("Location: ../event.php?error=Sorry, only JPG, JPEG, PNG & GIF Files are Allowed.");
  //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
	header("Location: ../event.php?error=Sorry, your File was not Uploaded..");
  //echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

$name= htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));

$sql = "UPDATE event SET image = '$name' WHERE eid = '$eid'";

if (mysqli_query($conn, $sql)) {
		header("Location: ../event.php?success= Image Upload Successfully.");
  //echo "Record updated successfully";
}  
   else {
   	header("Location: ../event.php?error=Sorry, there was an error uploading your file.");
    //echo "Sorry, there was an error uploading your file.";
  }
}}
?>