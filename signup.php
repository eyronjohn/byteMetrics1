<?php
session_start();
$errors = [];

if (isset($_SESSION['errors'])) {
    $errors = $_SESSION['errors'];
    unset($_SESSION['errors']); // ✅ Clear errors after storing them in $errors
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles1.css">

    <!-- <link rel="stylesheet" href="styles1.css"> -->
</head>
<body>
    <div class="form-container">
        <div class="container">
            <form action="user_acc.php" method="POST">
                <h1 id="title">Create Account</h1>
                <div id="divider"></div>
                <?php
        if (isset($errors['user_exist'])) {
            echo '<div class="error-main">
                    <p>' . $errors['user_exist'] . '</p>
                    </div>';
                    unset($errors['user_exist']);
        }
        ?>
                <input type="text" id="username" name="username" placeholder="Username" class="username" required>
                <input type="email" id="email" name="email" placeholder="Email Address" class="emailAdd">
                <input type="password" id="password" name="password" placeholder="Password" class="password">
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" class="password">

                <input type="submit" value="Signup" name="signup">
                <label for="">Already have an account? <span id="sign">Sign In Now</span></label>
            </form>
        </div>
    </div>
    
</body>
</html>