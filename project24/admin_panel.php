<?php
    include "database.php";
    session_start();

    if(!isset($_SESSION['user_id'])){
        header("Location: login.php");
    }
    
    echo "<h2>Users</h2>";
    echo "<table border='1'>";

    echo "<tr><th>Username</th><th>Password</th><th>Name</th><th>Email</th><th>Role</th><th>Actions</th></tr>";
    foreach ($users as $u) {
        $index = array_search($u['username'], array_column($users, 'username'));
        $indexString = strval($index) . "index";

        if (isset($_SESSION[$indexString])){

            echo "<tr>";
            echo "<td>" . $_SESSION[$indexString]['username'] . "</td>";
            echo "<td>" . $_SESSION[$indexString]['password'] . "</td>";
            echo "<td>" . $_SESSION[$indexString]['name'] . "</td>";
            echo "<td>" . $_SESSION[$indexString]['email'] . "</td>";
            echo "<td>" . $_SESSION[$indexString]['role'] . "</td>";
            echo "<td>";
        }

        else {
            $_SESSION[$indexString] = $u;
            echo "<tr>";
            echo "<td>" . $u['username'] . "</td>";
            echo "<td>" . $u['password'] . "</td>";
            echo "<td>" . $u['name'] . "</td>";
            echo "<td>" . $u['email'] . "</td>";
            echo "<td>" . $u['role'] . "</td>";
            echo "<td>";
        }

        if ($u['username'] !== $_SESSION['user_id']) { 
            echo "<a href='edit_user.php?username=" . $u['username'] . "'>Edit</a>";
        }


    echo "</td>";
    echo "</tr>";
    }

    echo "</table>";
