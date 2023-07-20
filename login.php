<?php

require 'database.php';

$username_email = $_SESSION['signin-data']['username_email'] ?? null;
$password = $_SESSION['signin-data']['password'] ?? null;

unset($_SESSION['signin-data']);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Callista Nweke</title>
  <style>
    /* Styles for centering the form and setting the font */
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      font-family: Arial, sans-serif;
    }

    /* Styles for the form container */
    form {
      max-width: 400px;
      width: 100%;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    /* Styles for the form labels */
    label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
    }

    /* Styles for the form input fields */
    input,
    textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-bottom: 10px;
      resize: vertical;
    }

    /* Styles for the submit button */
    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      cursor: pointer;
    }

    /* Hover styles for the submit button */
    input[type="submit"]:hover {
      background-color: #45a049;
    }

    /* Media query for responsive behavior on smaller screens */
    @media (max-width: 600px) {
      form {
        max-width: 100%;
      }
    }
  </style>
</head>
<body>
  
  <form action="log.php" method="POST">
  <h1>Login</h1>
  <?php if (isset($_SESSION['signup-success'])) : ?>
    <p style="color: green; font-weight: bold;"><?= $_SESSION['signup-success'] ?></p>
    <?php unset($_SESSION['signup-success']); ?>
  <?php endif; ?>
    <!-- Username field -->
    <label for="name">Username/Email:</label>
    <input type="text"  name="username_email" value="<?= $username_email?>" required>
    

    
   <!-- Password field -->
   <label for="password">Password:</label>
    <input type="password" name="password" value="<?= $password?>" required>


    
    <!-- Submit button -->
    <!-- Submit button -->
  <button type="submit" name="submit" style="display: block; margin: 0 auto; background-color: green; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Login</button>

    <br>
    <p><h3>Don't Have an Account <a href="register.html">Register Now</a></h3></p>
  </form>
</body>
</html>
