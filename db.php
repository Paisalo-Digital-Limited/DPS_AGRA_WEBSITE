// =========================
// FILE: db.php
// =========================
<?php
$conn = new mysqli("localhost", "root", "", "hospital_erp");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>