<?php
// echo '<pre>';
// var_dump($_POST);

if($_SERVER["REQUEST_METHOD"] == "POST") {

  $birthday = new DateTime($_POST["birthday"]);
  $today = new DateTime();
  
  $interval = $today->diff($birthday);
  $years = $interval->y;
  $months = $interval->m;
  $days = $interval->d;
  
  $today_string = $today->format('Y-m-d');
  $birthday_string = $birthday->format('Y-m-d');

  if(empty($_POST["firstname"] || $_POST["firstname"] || $_POST["email"] || $_POST["birthday"])){
    exit();
    header("Location: registration-form.php");
  }

  echo "Hello {$_POST["firstname"]}, <br>";
  echo "Your details are as follows <br>";
  echo "<hr>";
  echo "Your name: {$_POST["firstname"]} {$_POST["lastname"]} <br>";
  echo "Your email: {$_POST["email"]} <br>";
  echo "Your birthday: {$_POST["birthday"]} <br>";
  
  echo "You are $years years, $months months, $days days old now <br>";
  echo "<hr>";
}

$dir = 'uploads/';

$target_file = $dir . basename($_FILES['file']['name']);
// var_dump($target_file);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is an actual image or a fake image
$check = getimagesize($_FILES['file']['tmp_name']);
if($check !== false){
  echo "File is an image - {$check['mime']}.";
  $uploadOk = 1;
} else {
  echo 'File is not an image.';
  $uploadOk = 0;
}

if($uploadOk){
  if(move_uploaded_file($_FILES['file']['tmp_name'], $target_file)){
    echo "The file" . basename($_FILES['file']['name'])." has been uploaded";
  } else {
    echo "Sorry, there was an error uploading your file";
  }
}