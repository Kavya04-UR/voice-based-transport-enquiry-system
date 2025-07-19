<?php
include '../db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bus_number = $_POST['bus_number'];
    $origin = $_POST['origin'];
    $destination = $_POST['destination'];
    $sql = "INSERT INTO buses (bus_number, origin, destination) VALUES ('$bus_number', '$origin', '$destination')";
    mysqli_query($conn, $sql);
    echo "Bus inserted successfully.";
}
?>
<h2>Insert Bus</h2>
<form method="POST">
  Bus Number: <input type="text" name="bus_number"><br>
  Origin: <input type="text" name="origin"><br>
  Destination: <input type="text" name="destination"><br>
  <button type="submit">Insert</button>
</form>
