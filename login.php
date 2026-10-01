// =========================
// FILE: login.php
// =========================
<?php
session_start();
include 'moti.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $_SESSION['admin'] = $username;
        header("Location: dashboard.php");
    } else {
        echo "Invalid Login";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>
<body>
<h2>Moti Hospital ERP Login</h2>
<form method="post">
<input type="text" name="username" placeholder="Username" required><br><br>
<input type="password" name="password" placeholder="Password" required><br><br>
<button name="login">Login</button>
</form>
</body>
</html>