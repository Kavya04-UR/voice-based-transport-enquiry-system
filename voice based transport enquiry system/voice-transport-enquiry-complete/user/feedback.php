<?php
include '../db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    mysqli_query($conn, "INSERT INTO feedback (name, email, message) VALUES ('$name', '$email', '$message')");
    echo "Thank you for your feedback!";
}
?>
<h2>User Feedback</h2>
<form method="POST">
  Name: <input type="text" name="name"><br>
  Email: <input type="email" name="email"><br>
  Message:<br>
  <textarea name="message"></textarea><br>
  <button type="submit">Submit</button>
</form>
