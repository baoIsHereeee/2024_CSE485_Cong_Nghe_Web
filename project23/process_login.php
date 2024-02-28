<?php
    include "database.php";
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];
    $error;

    $user = null;
    foreach ($users as $userCheck){
        if ($userCheck['username'] == $username){
            $user = $userCheck;
            break;
        }
    }

    // No cookie yet!
    if ($user && $password == $user['password']){
        $_SESSION['user_id'] = $user['username'];
        header("Location: profile.php");
    }

    else {
        echo "Failed to log in!<br>";
    }
    
    echo '<a href="login.php">Back to Login!</a>';


