<?php
include '../db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $msg = $_POST["message"];
    $sql = "INSERT INTO feedback (name, email, message) VALUES ('$name', '$email', '$msg')";
    mysqli_query($conn, $sql);
    echo "<script>alert('Feedback submitted!');</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Voice Transport Enquiry + Feedback</title>
  <script src="voice.js"></script>
  <style>
    body { font-family: Arial, sans-serif; padding: 20px; background: #f2f2f2; }
    h1 { color: #333; }
    section { margin-bottom: 40px; background: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 0 8px rgba(0,0,0,0.1); }
    input, textarea { width: 100%; padding: 10px; margin-top: 5px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 5px; }
    button { padding: 10px 20px; background: #007BFF; color: white; border: none; border-radius: 5px; cursor: pointer; }
    button:hover { background: #0056b3; }
    #result { padding: 10px; background: #e0f7fa; margin-top: 10px; border-radius: 5px; }
  </style>
</head>
<body>

  <h1>🚌 Voice-Based Transport Enquiry System</h1>

  <!-- Voice Bus Search Section -->
  <section>
    <h2>🎙️ Ask About a Bus</h2>
    <button onclick="startRecognition()">🎤 Speak</button>
    <p>You said: <span id="speechText"></span></p>
    <div id="result"></div>
  </section>

  <!-- Feedback Section -->
  <section>
    <h2>📝 Submit Feedback</h2>
    <form method="POST">
      <label>Name:</label>
      <input type="text" name="name" required>
      <label>Email:</label>
      <input type="email" name="email" required>
      <label>Message:</label>
      <textarea name="message" rows="5" required></textarea>
      <button type="submit">Send Feedback</button>
    </form>
  </section>

</body>
</html>
