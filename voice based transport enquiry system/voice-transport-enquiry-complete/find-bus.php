<?php
include 'db.php';

$query = $_GET['query'];
$sql = "SELECT * FROM buses WHERE bus_number LIKE '%$query%' OR origin LIKE '%$query%' OR destination LIKE '%$query%'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Bus " . $row['bus_number'] . " goes from " . $row['origin'] . " to " . $row['destination'] . "<br>";
        echo "<script>speechSynthesis.speak(new SpeechSynthesisUtterance('Bus " . $row['bus_number'] . " goes from " . $row['origin'] . " to " . $row['destination'] . "'));</script>";
    }
} else {
    echo "No matching bus found.";
    echo "<script>speechSynthesis.speak(new SpeechSynthesisUtterance('No matching bus found'));</script>";
}
?>
