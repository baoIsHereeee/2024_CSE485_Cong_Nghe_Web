<?php
session_start();
include 'database.php';

if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in']) || $_SESSION['user_role'] !== "admin") {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
</head>
<body>
    <h2>Admin Panel</h2>
    <h3>Users</h3>
    <table border = '1'>
        <tr>
            <th>Username</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($users as $u) : ?>
            <tr>
                <td><?php echo $u['username']; ?></td>
                <td><?php echo $u['name']; ?></td>
                <td><?php echo $u['email']; ?></td>
                <td><?php echo $u['role']; ?></td>
                <td>
                    <?php if ($u['username'] !== $_SESSION['user_id']) : ?>
                        <a href='edit_user.php?username=<?php echo $u['username']; ?>'>Edit</a>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
