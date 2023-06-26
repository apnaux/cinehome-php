<?php

require($_SERVER["DOCUMENT_ROOT"] . "/connection.php");
session_start();

$target_dir = $_SERVER["DOCUMENT_ROOT"] ."/storage/profile/";
$uploadOk = 1;
$dunno = explode('.',$_FILES["image"]["name"]);
$fileExtension = strtolower(end($dunno));
$get_uniqid = uniqid();
$target_file = $target_dir . $get_uniqid . "." . $fileExtension;
$db_file_directory = "/storage/profile/" . $get_uniqid . "." . $fileExtension;

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["image"]["tmp_name"]);
  if($check !== false) {
    $uploadOk = 1;
  } else {
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
    $_SESSION['message'] = "Fiile already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["image"]["size"] > 1000000) {
    $_SESSION['message'] = "Your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($fileExtension != "jpg" && $fileExtension != "png" && $fileExtension != "jpeg") {
    $_SESSION['message'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    $select = "update account set profile_image='" . $db_file_directory . "', updated_at=CURRENT_TIMESTAMP() where id=" . $_SESSION['account_id'];
    $result = mysqli_query($conn, $select);
    $_SESSION['message'] = "The file has been uploaded.";
  }
}

mysqli_close($conn);
header("Location: /web/user/profile.php");
?>
