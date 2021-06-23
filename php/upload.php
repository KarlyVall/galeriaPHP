<?php
$target_dir = "../gallery/images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$result = true;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    $result = 1;
  } else {
    $result = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  $result = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 10000000) {
  $result = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
  $result = 0;
}

// Check if $result is set to 0 by an error
if ($result == 0) {
    header("Location: ../confirmation/confirmation.php?result=$result");
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    header("Location: ../confirmation/confirmation.php?result=$result");
  } else {
    $result = 0;
    header("Location: ../confirmation/confirmation.php?result=$result");
  }
}
?>