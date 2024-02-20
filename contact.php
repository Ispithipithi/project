<?php include("header.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Us</title>
<link rel="stylesheet" href="styles.css"> <!-- External CSS file -->
</head>
<body>

<div class="container">
  <h2>Contact Us</h2>

  <div class="contact-form">
    <form action="submit_contact_form.php" method="post">
      <div class="form-group">
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required>
      </div>
      <div class="form-group">
        <label for="email">Your Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
      </div>
      <div class="form-group">
        <label for="message">Your Message:</label>
        <textarea id="message" name="message" rows="6" placeholder="Enter your message" required></textarea>
      </div>
      <button type="submit">Send Message</button>
    </form>
  </div>
</div>
</body>
</html>
