<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      color: #333;
      background-color: rgb(249, 249, 249);
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    /* Navbar Styles */
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 20px;
      background: #ffffff;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .navbar .logo {
      font-size: 24px;
      font-weight: 700;
      color: #00a8ff;
    }

    .navbar .nav-links {
      list-style: none;
      display: flex;
      gap: 20px;
    }

    .navbar .nav-links li a {
      font-size: 16px;
      font-weight: 500;
      transition: color 0.3s;
    }

    .navbar .nav-links li a:hover {
      color: #00a8ff;
    }

    /* Contact Section */
    .contact-section {
      padding: 50px 20px;
      text-align: center;
      background: #ffffff;
    }

    .contact-section h2 {
      font-size: 36px;
      color: #333;
      margin-bottom: 30px;
      font-weight: 600;
    }

    .contact-form {
      max-width: 600px;
      margin: 0 auto;
      background-color: #f9f9f9;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .contact-form input, .contact-form textarea {
      width: 100%;
      padding: 12px;
      margin-bottom: 20px;
      border: 1px solid #ddd;
      border-radius: 5px;
      font-size: 16px;
    }

    .contact-form button {
      background-color: #00a8ff;
      color: white;
      border: none;
      padding: 12px 20px;
      font-size: 16px;
      cursor: pointer;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    .contact-form button:hover {
      background-color: #0077cc;
    }

    /* Footer */
    .footer {
      background-color: rgb(147, 234, 206);
      color: rgb(0, 0, 0);
      padding: 30px 20px;
      text-align: center;
    }

    .footer-content {
      max-width: 1000px;
      margin: 0 auto;
    }

    .footer-content p {
      font-size: 16px;
      margin-bottom: 20px;
    }

    .footer-links {
      list-style: none;
      padding: 0;
      display: flex;
      justify-content: center;
      margin-bottom: 20px;
    }

    .footer-links li {
      margin: 0 15px;
    }

    .footer-links a {
      color: rgb(0, 0, 0);
      font-size: 16px;
      text-decoration: none;
      transition: color 0.3s;
    }

    .footer-links a:hover {
      color: #00a8ff;
    }

    .footer-social-icons {
      display: flex;
      justify-content: center;
      gap: 20px;
    }

    .footer-social-icons i {
      font-size: 24px;
      color: rgb(0, 0, 0);
      cursor: pointer;
      transition: color 0.3s, transform 0.3s;
    }

    .footer-social-icons i:hover {
      color: #00a8ff;
      transform: scale(1.1);
    }
  </style>
</head>
<body>
  <form method="post" action="send_email.php">

  <!-- Navbar -->
  <div class="navbar">
    <div class="logo">Your Logo</div>
    <ul class="nav-links">
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </div>




  <div class="contact-section">
    <h2>Contact Us</h2>
    <form method="POST" action="">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="message">Message:</label><br>
        <textarea id="message" name="message" required></textarea><br><br>

        <button type="submit">Send Message</button>
    </form>
  </div>

  <!-- Footer -->
  <div class="footer">
    <div class="footer-content">
      <p>&copy; 2025 Your Company. All rights reserved.</p>
      <ul class="footer-links">
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Terms of Service</a></li>
      </ul>
      <div class="footer-social-icons">
        <i class="fa fa-facebook"></i>
        <i class="fa fa-twitter"></i>
        <i class="fa fa-linkedin"></i>
      </div>
    </div>
  </div>

</body>
</html>
