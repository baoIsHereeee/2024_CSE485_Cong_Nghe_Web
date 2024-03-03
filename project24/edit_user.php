<?php
session_start();
include 'database.php';

if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in']) || $_SESSION['user_role'] !== "admin") {
    header('Location: login.php');
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username']; // Get username from form submission

    // Find user data by username
    $user_index = array_search($username, array_column($users, 'username'));

    // Check if user exists
    if ($user_index !== false) {
        // Update user information
        $users[$user_index]['name'] = $_POST['name'];
        $users[$user_index]['email'] = $_POST['email'];
        $users[$user_index]['role'] = $_POST['role'];

        // You may want to add validation and error handling here if needed
    } else {
        echo "Error: User not found.";
        exit();
    }

    // Redirect back to admin panel after editing
    header('Location: admin_panel.php');
    exit();
}

$username = $_GET['username']; // Get username from URL
$user = null;

foreach ($users as $u) {
    if ($u['username'] === $username) {
        $user = $u;
        break;
    }
}

if (!$user) {
    echo "Error: User not found.";
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User: <?php echo $user['name']; ?></title>
</head>
<body>
    <h2>Edit User: <?php echo $user['name']; ?></h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="hidden" name="username" value="<?php echo $user['username']; ?>">
        Name: <input type="text" name="name" value="<?php echo $user['name']; ?>" required><br>
        Email: <input type="email" name="email" value="<?php echo $user['email']; ?>" required><br>
        Role:
        <select name="role">
            <option value="user" <?php echo ($user['role'] === 'user') ? 'selected' : ''; ?>>User</option>
            <option value="admin" <?php echo ($user['role'] === 'admin') ? 'selected' : ''; ?>>Admin</option>
        </select><br>
        <button type="submit">Save Changes</button>
    </form>
</body>
</html>
