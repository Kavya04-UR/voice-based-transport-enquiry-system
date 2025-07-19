<?php
include '../db.php';
$result = mysqli_query($conn, "SELECT * FROM buses");
?>
<h2>View Buses</h2>
<table border="1">
<tr><th>Bus Number</th><th>Origin</th><th>Destination</th></tr>
<?php while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
  <td><?= $row['bus_number'] ?></td>
  <td><?= $row['origin'] ?></td>
  <td><?= $row['destination'] ?></td>
</tr>
<?php } ?>
</table>
