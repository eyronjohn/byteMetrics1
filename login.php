<?php

session_start();
if (isset($_SESSION['errors'])) {
  $errors = $_SESSION['errors'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles2.css">
</head>
<body>
    <div class="form-container">
        <div class="container">
        <?php
               if (isset($errors['login'])) {
              echo '<div class="error-main">
                    <p>' . $errors['login'] . '</p>
                    </div>';
                unset($errors['login']);
                }
              ?>
            <form action="user_acc.php" method="POST">
                <h1 id="title">Login</h1>
                <div id="divider2"></div>
                <input type="email" name="email" placeholder="Email Address" class="emailAdd">
                <input type="password" name="password" placeholder="Password" class="password"><br>

                <label for="" id="remember"><input type="checkbox" name=""> Remember Me</label>
                <label for="" id="sign">Forgot Password</label>
                
                <input type="submit" name="login" value="Login" id="login"><br>
                <label for="" id="acc">Don't have an account? <span id="sign">Sign Up Now</span></label>
            </form>
        </div>
    </div>
</body>
</html>