<?php 
    session_start();

    include_once 'database.php';
    
    if(!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in'])){
        header('Location: login.php');
    }

    $username = $_SESSION['user_id'];
    
    $user = null;
    foreach ($users as $u) {
        if($u['username'] == $username) {
            $user = $u;
            break;
        }
    }

    if($user) {
        echo "Welcome, " . $user['name']."!";
        echo "<br>Email: ". $user['email'];
        echo "<br>Username: ". $user['username'];

    }else {
        echo "Error: User not found.";
    }

?>