<?php
    // Database connection
    // $server = "localhost";
    // $db_user = "root"; 
    // $db_pass = "";
    // $db_name = "login1";
    
    // $conn = new mysqli($server, $db_user, $db_pass, $db_name);

    $host="localhost";
    $dbname='login1';
    $username='root';
    $password='';

    //$pdo=new PDO("mysql:host=$host;dbname=$dbname",$username,$password);

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Enable error reporting
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Fetch data as associative array
            PDO::ATTR_EMULATE_PREPARES => false // Prevent SQL injection risks
        ]);
    } catch (PDOException $e) {
        die("Database connection failed: " . $e->getMessage());
    }
?>