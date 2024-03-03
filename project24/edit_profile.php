<?php
session_start();
include 'database.php';

if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in'])) {
    header('Location: login.php');
    exit();
}

$username = $_SESSION['user_id'];
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form submission
    // You can update user information here
    // For example, update name and email
    $user['name'] = $_POST['name'];
    $user['email'] = $_POST['email'];

    // You may want to add validation and error handling here

    // Redirect back to profile page after editing
    header('Location: profile.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
</head>
<body>
    <h2>Edit Profile</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        Name: <input type="text" name="name" value="<?php echo $user['name']; ?>" required><br>
        Email: <input type="email" name="email" value="<?php echo $user['email']; ?>" required><br>
        <button type="submit">Save Changes</button>
    </form>
</body>
</html>
