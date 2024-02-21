<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Login</title>
<link rel="stylesheet" href="styles.css"> <!-- External CSS file -->
</head>
<body>

<div class="login-container">
  <h2>Admin Login</h2>
  <form action="login.php" method="POST">
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
    </div>
    <button type="submit" name='Signin'>Login</button>
  </form>
</div>

</body>
</html>
