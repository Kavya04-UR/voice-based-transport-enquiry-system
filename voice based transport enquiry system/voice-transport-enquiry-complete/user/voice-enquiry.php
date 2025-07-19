<?php
include '../db.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Voice Bus Enquiry</title>
  <script src="voice.js"></script>
</head>
<body>
  <h2>Speak a Bus Number or Location</h2>
  <button onclick="startListening()">🎤 Start Voice Input</button>
  <form method="GET" action="../find-bus.php">
    <input type="text" id="query" name="query" placeholder="Say or type bus number or place">
    <button type="submit">Search</button>
  </form>
</body>
</html>
