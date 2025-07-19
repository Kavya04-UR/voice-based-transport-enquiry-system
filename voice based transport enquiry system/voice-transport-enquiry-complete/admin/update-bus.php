<?php
include '../db.php';
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $origin = $_POST['origin'];
    $destination = $_POST['destination'];
    $sql = "UPDATE buses SET origin='$origin', destination='$destination' WHERE id=$id";
    mysqli_query($conn, $sql);
    echo "Bus updated successfully.";
}
$result = mysqli_query($conn, "SELECT * FROM buses");
?>
<h2>Update Bus</h2>
<form method="POST">
  <select name="id">
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
      <option value="<?= $row['id'] ?>"><?= $row['bus_number'] ?></option>
    <?php } ?>
  </select><br>
  New Origin: <input type="text" name="origin"><br>
  New Destination: <input type="text" name="destination"><br>
  <button type="submit" name="update">Update</button>
</form>
