// =========================
// FILE: salary.php
// =========================
<?php
include 'moti.php';
if (isset($_POST['add'])) {
    $emp = $_POST['emp'];
    $amount = $_POST['amount'];
    $conn->query("INSERT INTO salary (employee, amount) VALUES ('$emp','$amount')");
}
$result = $conn->query("SELECT * FROM salary");
?>
<h2>Salary Management</h2>
<form method="post">
<input type="text" name="emp" placeholder="Employee Name" required>
<input type="number" name="amount" placeholder="Salary" required>
<button name="add">Add</button>
</form>
<table border="1">
<tr><th>ID</th><th>Employee</th><th>Salary</th></tr>
<?php while($row=$result->fetch_assoc()) { ?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['employee']; ?></td>
<td><?php echo $row['amount']; ?></td>
</tr>
<?php } ?>
</table>