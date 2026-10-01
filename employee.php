// =========================
// FILE: employee.php
// =========================
<?php
include 'moti.php';
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $role = $_POST['role'];
    $conn->query("INSERT INTO employees (name, role) VALUES ('$name','$role')");
}
$result = $conn->query("SELECT * FROM employees");
?>
<h2>Employee Management</h2>
<form method="post">
<input type="text" name="name" placeholder="Name" required>
<input type="text" name="role" placeholder="Role" required>
<button name="add">Add</button>
</form>
<table border="1">
<tr><th>ID</th><th>Name</th><th>Role</th></tr>
<?php while($row=$result->fetch_assoc()) { ?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['role']; ?></td>
</tr>
<?php } ?>
</table>
