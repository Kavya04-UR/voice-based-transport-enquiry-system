<?php
include '../db.php';
$result = mysqli_query($conn, "SELECT * FROM feedback ORDER BY date DESC");
?>
<h2>Feedback from Users</h2>
<table border="1">
<tr><th>Name</th><th>Email</th><th>Message</th><th>Date</th></tr>
<?php while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
  <td><?= $row['name'] ?></td>
  <td><?= $row['email'] ?></td>
  <td><?= $row['message'] ?></td>
  <td><?= $row['date'] ?></td>
</tr>
<?php } ?>
</table>
