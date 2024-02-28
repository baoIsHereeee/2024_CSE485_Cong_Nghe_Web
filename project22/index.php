<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'database.php'; ?>

    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            width: 400px; 
        }
    </style>

</head>

<body>
    <?php
        session_start();
        if (isset($_SESSION['avatar'])){
            $avatar = $_SESSION['avatar'];
        }
        else {
            $avatar = "uploads/default_ava.jpeg";
        }
    ?>

    <div class="container">
    <form action="update_profile.php" method="post" enctype="multipart/form-data">
        <h2>Account Settings</h2>
        <label for="avatar">Avatar</label> <br>
        <img style="border radius: 50%; width: 200px; height: 200px" src="<?php echo $avatar; ?>" alt=""Avatar> <br>
        <input type="file" name="avatar" accept="img/*"> <br> <br>

        <label for="name">Full Name</label><br>
        <input type="text" name="name" value="<?php echo $user['name'];?>" required> <br> <br>

        <label for="email">Email</label><br>
        <input type="text" name="email" value="<?php echo $user['email'];?>" disabled > <br> <br>

        <label for="phone">Phone Number</label><br>
        <input type="text" name="phone" value="<?php echo $user['phone'];?>" > <br> <br>

        <label for="company">Company Name</label><br>
        <input type="text" name="company" value="<?php echo $user['company'];?>" > <br> <br>

        <button type="Submit">Update Profile</button>
    </form>

    </div>

</body>
</html>