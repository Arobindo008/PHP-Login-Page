<?php
include "mail_func.php";
require_once('db_connect.php');
$connect = mysqli_connect(HOST, USER, PASS, DB)
  or die('can not connected');

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = mysqli_real_escape_string($connect, $_POST["email"]);
  $password = mysqli_real_escape_string($connect, $_POST["password"]);


  $sql = "SELECT * FROM login WHERE email = '$email' AND password = '$password'";
  $result = mysqli_query($connect, $sql);
  $row = mysqli_fetch_array($result);

  if (isset($row)) {
    if ($row["usertype"] == "user") {
      $otp = rand(10000, 99999);
      sendOTP($_POST["email"], $otp);
      $_SESSION["userpage"] = 'user';
      $_SESSION["otp"] = $otp;
      header("location:otp.php");
    } elseif ($row["usertype"] = "admin") {
      $otp = rand(10000, 99999);
      sendOTP($_POST["email"], $otp);
      $_SESSION["userpage"] = 'admin';
      $_SESSION["otp"] = $otp;
      header("location:otp.php");
    }

  } else {
    header("location:login2.php");
  }


}

?>