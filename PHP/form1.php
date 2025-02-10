
<?php
$fnameErr = $snameErr= $addErr = $idErr = $emailErr = $zipErr =$phErr = $coErr = "";
$fname = $sname = $add = $id = $zip = $phone = $email = $country = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fnamei"])) {
    $nameErr = "First name is required";
  } else {
    $fname = test_input($_POST["fnamei"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$fnamei)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["snamei"])) {
    $snameErr = "Second name is required";
  } else {
    $sname = test_input($_POST["snamei"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$snamei)) {
      $snameErr = "Only letters and white space allowed";
    }
  }
  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["addi"])) {
    $addErr = "Address is required";
  } else {
    $add = test_input($_POST["addi"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$addi)) {
      $addErr = "Only letters and white space allowed";
    }
  }
  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["idi"])) {
    $idErr = "City name is required";
  } else {
    $id = test_input($_POST["idi"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$idi)) {
      $idErr = "Only letters and white space allowed";
    }
  }
  
  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["zipi"])) {
    $zipErr = "ZIP is required";
  } else {
    $zip = test_input($_POST["zipi"]);
    if (!preg_match("/^[0-9-' ]*$/",$addi)) {
      $zipErr = "Only numbers and white space allowed";
    }
  }
  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["countryi"])) {
    $coErr = "Country name is required";
  } else {
    $country = test_input($_POST["countryi"]);
  }
  
  
  if (empty($_POST["emaili"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  
  if (empty($_POST["phonei"])) {
    $phErr = "Phone number is required";
  } else {
    $phone = test_input($_POST["email"]);
    if (!preg_match("/^[0-9-' ]*$/",$addi)) {
      $phErr = "Only numbers allowed";
    }
  }
    

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$myfile = fopen("form1.txt", "a") or die("Unable to open file!");
$txt = $fname. PHP_EOL .$sname. PHP_EOL .$add. PHP_EOL .$id. PHP_EOL .$zip. PHP_EOL .$phone. PHP_EOL .$email. PHP_EOL .$country;
fwrite($myfile, $txt);

?>
