<?php
session_start();
if (!isset($_SESSION["userpage"])) {
    header("location:login2.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>User Page</title>
</head>

<body>
    <div class="container">
        <h1>Welcome User</h1>
        <a href="logout.php"><button type="submit">Logout</button></a>
        </form>
    </div>
</body>

</html>