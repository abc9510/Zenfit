<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ZenFit Sign In</title> 
  <link rel="stylesheet" href="css/signin.css">
  <link rel="icon" href="assets/favicon.ico" type="image/x-icon">
  <link rel="icon" href="assets/favicon.png" type="image/png" sizes="32x32">
  <link rel="icon" href="assets/favicon-192.png" type="image/png" sizes="192x192">
</head>
<body>
  <div class="wrapper">
    <h2>Sign In to ZenFit</h2>
    <form action="signin.php" method="POST">
      <div class="form-group">
        <label for="email">Email:</label>
        <div class="input-box">
          <input type="email" id="email" name="email" required>
        </div>
      </div>
      
      <div class="form-group">
        <label for="password">Password:</label>
        <div class="input-box">
          <input type="password" id="password" name="password" required>
        </div>
      </div>
      
      <div class="form-group button">
        <input type="submit" value="Login">
      </div>
      
      <div class="text">
        <h3>Don't have an account? <a href="signup.php">Sign up now</a></h3>
      </div>
    </form>
  </div>
</body>
</html>
