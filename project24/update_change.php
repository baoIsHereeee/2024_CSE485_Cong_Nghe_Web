<?php
    include "database.php";
    session_start();

    if(!isset($_SESSION['user_id'])){
        header("Location: login.php");
    }

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $username = $_POST['user'];
        $password = $_POST['pass'];
        $email = $_POST['email'];
        $name = $_POST['name'];
        $role = $_POST['role'];
    }

  
    $index = array_search($username, array_column($users, 'username'));
    $indexString = strval($index) . "index";

    $_SESSION[$indexString]['password'] = $password;
    $_SESSION[$indexString]['name'] = $name;
    $_SESSION[$indexString]['email'] = $email;
    $_SESSION[$indexString]['role'] = $role;

    echo "Updated Successfully!";
    echo '<a href="profile.php">Back to profile!</a>';





