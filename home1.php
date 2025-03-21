<?php
session_start();
if(isset($_SESSION['user'])){
    $user = $_SESSION['user'];

}else{
    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }

        .user-details{
            width: 500px;
            height: 500px;
            margin-left: 30%;
            margin-top: 2%;
        }

        .user-details h1, p, a{
            text-align: center;
        }

        .user-details h1{
            margin-bottom: 4%;
        }
    </style>
</head>

<body>

    <div class="user-details">
        <h1>Logged in user</h1>
        <?php
        echo '<p>Email: ' . $user['email'] . '</p><br>';

        echo '<p> Username: ' . $user['username'] . '</p>';

        ?>
        <!-- <a href="index.php">Logout</a> -->

    </div>


</body>

</html>