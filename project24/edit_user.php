<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "database.php"; ?>
</head>
<body>

    <?php
        session_start();

        if(!isset($_SESSION['user_id'])){
            header("Location: login.php");
        }

        $username = $_GET['username'];

        $user = null;

        foreach ($users as $u) {
            if ($u['username'] ==  $username){
                $user = $u;
                break;
            }
        }
        $index = array_search($u['username'], array_column($users, 'username'));
        $indexString = strval($index) . "index";

        echo "<h2>Edit User: " . $user['name'] . "</h2>";
    ?>

    <form action="update_change.php" method="post">
        <label for="user">Username: </label>
        <input style="width: 200px" name="user" type="text" value=<?php echo $_SESSION[$indexString]['username'] ?> readonly> <br> <br>

        <label for="pass">Password: </label>
        <input style="width: 200px" name="pass" type="text" value=<?php echo $_SESSION[$indexString]['password'] ?>> <br> <br>

        <label for="name">Name: </label>
        <input style="width: 200px" name="name" type="text" value=<?php echo  $_SESSION[$indexString]['name'] ?>> <br> <br>

        <label for="email">Email: </label>
        <input style="width: 200px" name="email" type="text" value=<?php echo $_SESSION[$indexString]['email'] ?>> <br> <br>

        <label for="role">Role: </label>
        <input style="width: 200px" name="role" type="text" value=<?php echo $_SESSION[$indexString]['role']?>> <br> <br>

        <button type="submit">Update Changes!</button>
    </form>
    
</body>
</html>