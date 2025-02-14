<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      color: #333;
      background-color: #f9f9f9;
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
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
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
      padding: 80px 20px;
      text-align: center;
      background: linear-gradient(135deg, #f0f8ff, #e6f7ff);
    }

    .contact-section h2 {
      font-size: 36px;
      margin-bottom: 20px;
      font-weight: 600;
      color: #333;
    }

    .contact-section p {
      font-size: 18px;
      margin-bottom: 40px;
      max-width: 600px;
      margin-left: auto;
      margin-right: auto;
      color: #555;
    }

    .contact-form {
      max-width: 600px;
      margin: 0 auto;
      background-color: rgba(255, 255, 255, 0.95);
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .contact-form:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 25px rgba(0, 0, 0, 0.15);
    }

    .contact-form input, .contact-form textarea {
      width: 100%;
      padding: 12px;
      margin-bottom: 20px;
      border: 1px solid #ddd;
      border-radius: 8px;
      font-size: 16px;
      background-color: rgba(255, 255, 255, 0.95);
      color: #333;
      transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .contact-form input:focus, .contact-form textarea:focus {
      border-color: #00a8ff;
      box-shadow: 0 0 8px rgba(0, 168, 255, 0.2);
      outline: none;
    }

    .contact-form input::placeholder, .contact-form textarea::placeholder {
      color: #999;
    }

    .contact-form button {
      background-color: #00a8ff;
      color: white;
      border: none;
      padding: 12px 20px;
      font-size: 16px;
      cursor: pointer;
      border-radius: 8px;
      transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .contact-form button:hover {
      background-color: #0077cc;
      transform: translateY(-2px);
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
  <!-- Navbar -->
  <div class="navbar">
    <div class="logo">Eli.Propreté</div>
    <ul class="nav-links">
      <li><a href="homepage.php">Accueil</a></li>
      <li><a href="our_work.php">Nos Travaux</a></li>
      <li><a href="services.php">Services</a></li>
    </ul>
  </div>

  <!-- Contact Section -->
  <div class="contact-section">
    <h2>Contactez-nous</h2>
    <p>Nous sommes à votre écoute pour répondre à vos questions et vous accompagner dans vos projets.</p>
    <form class="contact-form" method="POST" action="">
      <input type="text" id="name" name="name" placeholder="Votre nom" required>
      <input type="email" id="email" name="email" placeholder="Votre email" required>
      <textarea id="message" name="message" placeholder="Votre message" rows="5" required></textarea>
      <button type="submit">Envoyer le message</button>
    </form>
  </div>

  <!-- Footer -->
  <div class="footer">
    <div class="footer-content">
    <p>&copy; 2025 Eli.Propreté. Tous droits réservés.</p>
    <ul class="footer-links">
      <li><a href="privacy.html">Politique de confidentialité</a></li>
      <li><a href="services.php">Conditions d'utilisation</a></li>
      <li><a href="#">FAQ</a></li>
    </ul>
      <div class="footer-social-icons">
        <i class="fab fa-facebook"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-linkedin"></i>
      </div>
    </div>
  </div>
</body>
</html>