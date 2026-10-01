// =========================
// FILE: patient.php
// =========================
<?php
include 'db.php';
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $disease = $_POST['disease'];
    $conn->query("INSERT INTO patients (name, disease) VALUES ('$name','$disease')");
}
$result = $conn->query("SELECT * FROM patients");
?>
<h2>Patient Management</h2>
<form method="post">
<input type="text" name="name" placeholder="Name" required>
<input type="text" name="disease" placeholder="Disease" required>
<button name="add">Add</button>
</form>
<table border="1">
<tr><th>ID</th><th>Name</th><th>Disease</th></tr>
<?php while($row=$result->fetch_assoc()) { ?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['disease']; ?></td>
</tr>
<?php } ?>
</table>