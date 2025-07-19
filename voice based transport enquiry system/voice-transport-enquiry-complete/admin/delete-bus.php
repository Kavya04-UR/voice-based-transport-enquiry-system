<?php
include '../db.php';
if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    mysqli_query($conn, "DELETE FROM buses WHERE id=$id");
    echo "Bus deleted.";
}
$result = mysqli_query($conn, "SELECT * FROM buses");
?>
<h2>Delete Bus</h2>
<form method="POST">
  <select name="id">
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
      <option value="<?= $row['id'] ?>"><?= $row['bus_number'] ?></option>
    <?php } ?>
  </select><br>
  <button type="submit" name="delete">Delete</button>
</form>
