// =========================
// FILE: dashboard.php
// =========================
<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
</head>
<body>
<h1>Welcome to Moti Hospital ERP</h1>
<a href="employee.php">Employee Management</a><br>
<a href="patient.php">Patient Management</a><br>
<a href="salary.php">Salary Management</a><br>
<a href="store.php">Store Management</a><br>
<a href="room.php">Room Allotment</a><br><br>
<a href="logout.php">Logout</a>
</body>
</html>