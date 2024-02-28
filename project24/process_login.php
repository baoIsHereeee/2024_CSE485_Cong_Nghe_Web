<?php
    include "database.php";
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = null;   
    foreach ($users as $u) {
        if ($u['username'] ==  $username && $password == $u['password']){
            $user = $u;
            $_SESSION['user_id'] = $u['username'];
            $_SESSION['role'] = $u['role'];
            break;
        }
    }

    if($user){
        header("Location: profile.php");
    } else {
        echo "Failed to log in!";
        echo '<br><a href="login.php">Back to log in!</a>';
    }