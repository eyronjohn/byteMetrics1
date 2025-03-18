<?php
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    // Database connection
    $server = "localhost";
    $db_user = "root"; 
    $db_pass = "";
    $db_name = "login1";
    
    $conn = new mysqli($server, $db_user, $db_pass, $db_name);
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }else{
        $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO users(username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $hashed_pass);
       
        if ($stmt->execute()) {
            echo "Registration successful...";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    }
?>