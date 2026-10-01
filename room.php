// =========================
// FILE: room.php
// =========================
<?php
include 'moti.php';
if (isset($_POST['add'])) {
    $room = $_POST['room'];
    $patient = $_POST['patient'];
    $conn->query("INSERT INTO rooms (room_no, patient) VALUES ('$room','$patient')");
}
$result = $conn->query("SELECT * FROM rooms");
?>
<h2>Room Allotment</h2>
<form method="post">
<input type="text" name="room" placeholder="Room No" required>
<input type="text" name="patient" placeholder="Patient Name" required>
<button name="add">Add</button>
</form>
<table border="1">
<tr><th>ID</th><th>Room</th><th>Patient</th></tr>
<?php while($row=$result->fetch_assoc()) { ?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['room_no']; ?></td>
<td><?php echo $row['patient']; ?></td>
</tr>
<?php } ?>
</table>