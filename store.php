// =========================
// FILE: store.php
// =========================
<?php
include 'moti.php';
if (isset($_POST['add'])) {
    $item = $_POST['item'];
    $qty = $_POST['qty'];
    $conn->query("INSERT INTO store (item, quantity) VALUES ('$item','$qty')");
}
$result = $conn->query("SELECT * FROM store");
?>
<h2>Store Management</h2>
<form method="post">
<input type="text" name="item" placeholder="Item" required>
<input type="number" name="qty" placeholder="Quantity" required>
<button name="add">Add</button>
</form>
<table border="1">
<tr><th>ID</th><th>Item</th><th>Quantity</th></tr>
<?php while($row=$result->fetch_assoc()) { ?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['item']; ?></td>
<td><?php echo $row['quantity']; ?></td>
</tr>
<?php } ?>
</table>
