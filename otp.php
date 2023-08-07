<?php
session_start();
if (!isset($_SESSION["userpage"])) {
    header("location:login2.php");
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $receivedValue = $_SESSION["otp"];
    $inputValue = $_POST['email'];
    $user_page = $_SESSION["userpage"];


    if ($receivedValue == $inputValue) {
        if ($user_page == 'user') {
            header("location:user.php");
        } elseif ($user_page == 'admin') {
            header("location:admin.php");
        }
    } else {

    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>OTP</title>
</head>

<body>
    <div class="container">
        <h1>OTP Verification</h1>
        <h2>Check Your Email</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <input type="text" name="email" id="email" placeholder="Enter OTP code" />
            <button type="submit">submit</button>
        </form>

    </div>
</body>

</html>