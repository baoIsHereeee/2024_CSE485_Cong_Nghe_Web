<?php
    include "database.php";
    session_start();

    if(!isset($_SESSION['user_id'])){
        header("Location: login.php");
    }

    $username = $_SESSION['user_id'];
    $user = null;

    foreach ($users as $u) {
        if ($u['username'] ==  $username){
            $user = $u;
            break;
        }
    }

    if($user){
        $user_role = $_SESSION['role'];

        echo "Welcome, " .$user['username'];
        echo "<br>Email: " .$user['email'];
        echo "<br>Role: " .$user['role'];

        if($authorization_levels[$user_role]['edit_profile']){
            echo "<br>Edit basic profile information (link)";
        }

        if ($user_role == "admin" && $authorization_levels[$user_role]['access_admin_panel']){
            echo "<br><a href='admin_panel.php'>Admin Panel</a>";
        }
    }

    echo "<br><a href='logout.php'>Log out?</a>";