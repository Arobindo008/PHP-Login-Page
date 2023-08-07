<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <title>Login Page</title>
</head>

<body>

  <div class="container">
    <h1>Vulnerable to SQL Injection</h1>
    <h2>Enter Login Info</h2>
    <form action="login1process.php" method="POST">
      <label for="username">Email:</label>
      <input type="text" name="email" id="email" />
      <label for="password">password:</label>
      <input type="password" name="password" id="password" />
      <button type="submit">Login</button>
    </form>
  </div>
</body>

</html>