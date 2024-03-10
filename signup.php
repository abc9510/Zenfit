<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ZenFit Signup</title> 
  <link rel="stylesheet" href="css/signup.css">
  <link rel="icon" href="assets/favicon.ico" type="image/x-icon">
  <link rel="icon" href="assets/favicon.png" type="image/png" sizes="32x32">
  <link rel="icon" href="assets/favicon-192.png" type="image/png" sizes="192x192">
</head>
<body>
  <div class="wrapper">
    <h1>Signup for ZenFit</h1>
    <form action="signup.php" method="POST">
      <div class="form-group">
        <label for="name">Full Name:</label>
        <div class="input-box">
          <input type="text" id="name" name="name" required>
        </div>
      </div>
      
      <div class="form-group">
        <label for="age">Age:</label>
        <div class="input-box">
          <input type="text" id="age" name="age" required>
        </div>
      </div>
      
      <div class="form-group">
        <label for="gender">Select Gender:</label>
        <div class="input-box">
          <select id="gender" name="gender" required>
            <option value="">Select Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
          </select>
        </div>
      </div>
      
      <div class="form-group">
        <label for="phone">Contact Number:</label>
        <div class="input-box">
          <input type="number" id="phone" name="phone" required>
        </div>
      </div>
      
      <div class="form-group">
        <label for="joining_date">Date of Joining:</label>
        <div class="input-box">
          <input type="date" id="joining_date" name="joining_date" required>
        </div>
      </div>
      
      <div class="form-group">
        <label for="email">Email:</label>
        <div class="input-box">
          <input type="email" id="email" name="email" required>
        </div>
      </div>
      
      <div class="form-group">
        <label>Your Membership Plan:</label>
        <div class="input-box">
          <select id="membership" name="membership" required>
            <option value="">Select Membership</option>
            <option value="go">ZenFitGo Membership @499/Month</option>
            <option value="pro">ZenfitPro Membership @799/Month</option>
            <option value="plus">ZenfitPlus+ Membership @1999/Month</option>
          </select>
        </div>
      </div>
      
      <div class="form-group">
        <label for="password">Create Password:</label>
        <div class="input-box">
          <input type="password" id="password" name="password" required>
        </div>
      </div>
      <center>
      <div class="form-group button">
        <input type="submit" value="Register Now">
      </div>
</center>
      <div class="text">
        <h3>Already have an account? <a href="signin.php">Sign In</a></h3>
      </div>
    </form>
  </div>
</body>
</html>
