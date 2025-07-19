<?php
include 'db.php';

if (isset($_GET['query'])) {
    $query = strtolower($_GET['query']);
    $query = mysqli_real_escape_string($conn, $query);

    $sql = "SELECT * FROM buses";
    $result = mysqli_query($conn, $sql);

    $found = false;

    while ($row = mysqli_fetch_assoc($result)) {
        $busNumber = strtolower($row['bus_number']);
        $source = strtolower($row['source']);
        $destination = strtolower($row['destination']);

        if (strpos($query, $busNumber) !== false || strpos($query, $source) !== false || strpos($query, $destination) !== false) {
            echo "🚌 Bus {$row['bus_number']} from {$row['source']} to {$row['destination']} at {$row['time']}";
            $found = true;
            break;
        }
    }

    if (!$found) {
        echo "❌ No matching bus found.";
    }
}
?>
