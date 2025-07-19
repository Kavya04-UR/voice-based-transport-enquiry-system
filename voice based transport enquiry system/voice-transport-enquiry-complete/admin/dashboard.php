<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location:admin-login.php");
    exit();
}
?>
<h2>Admin Dashboard</h2>
<ul>
    <li><a href="insert-bus.php">Insert Bus</a></li>
    <li><a href="update-bus.php">Update Bus</a></li>
    <li><a href="delete-bus.php">Delete Bus</a></li>
    <li><a href="view-bus.php">View Buses</a></li>
    <li><a href="view-feedback.php">View Feedback</a></li>
    <li><a href="logout.php">Logout</a></li>
</ul>
