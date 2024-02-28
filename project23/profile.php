<?php
    include "database.php";
    session_start();
    if(!isset($_SESSION['user_id'])){
        header("Location: login.php");
    }

    $username = $_SESSION['user_id'];

    $user = null;
    foreach ($users as $userCheck){
        if ($userCheck['username'] == $username){
            $user = $userCheck;
            break;
        }
    }

    if ($user){
        echo "Welcome, " .$user['username']. "!";
        echo "<br>Email: " .$user['email'];
    }

    else {
        echo "User not found!";
    }

    echo '<br><a href="logout.php">Log out?</a>';

    