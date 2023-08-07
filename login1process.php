<?php

require_once('db_connect.php');
$connect = mysqli_connect(HOST, USER, PASS, DB)
    or die('can not connected');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];


    $sql = "SELECT * FROM login WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);
    if (isset($row)) {
        echo '<h1>success</h1>';
    } else {
        echo '<h1>failsure</h1>';
    }

}

?>