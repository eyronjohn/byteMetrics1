<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles1.css">
</head>
<body>
    <div class="form-container">
        <div class="container">
            <form action="conn.php" method="POST">
                <h1 id="title">Create Account</h1>
                <div id="divider"></div>
                <input type="text" id="username" name="username" placeholder="Username" class="username" required>
                <input type="email" id="email" name="email" placeholder="Email Address" class="emailAdd">
                <input type="password" id="password" name="password" placeholder="Password" class="password">
                <input type="password" id="password" name="password" placeholder="Confirm Password" class="password">

                <input type="submit" value="Signup">
                <label for="">Already have an account? <span id="sign">Sign In Now</span></label>
            </form>
        </div>
    </div>
    
</body>
</html>