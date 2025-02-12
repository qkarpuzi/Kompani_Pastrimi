<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cleaning Services</title>
  <link rel="stylesheet" href="../Cleaning Company/assests/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
    /* General Styles */
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

    .navbar .social-icons i {
      font-size: 18px;
      margin-left: 15px;
      color: #555;
      transition: color 0.3s;
    }

    .navbar .social-icons i:hover {
      color: #00a8ff;
    }

    /* Services Section */
    .services {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      padding: 50px 20px;
      background-color: #f9f9f9;
    }

    .service-box {
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      margin: 20px;
      padding: 30px;
      text-align: center;
      width: 300px;
      transition: transform 0.3s ease;
    }

    .service-box:hover {
      transform: translateY(-10px);
    }

    .service-box i {
      font-size: 3rem;
      color: #00a8ff;
      margin-bottom: 20px;
    }

    .service-box h3 {
      font-size: 1.5rem;
      color: #333;
      margin-bottom: 15px;
    }

    .service-box p {
      font-size: 1rem;
      color: #666;
      margin-bottom: 20px;
    }

    .service-box button {
      background-color: #00a8ff;
      color: white;
      border: none;
      padding: 10px 20px;
      font-size: 1rem;
      cursor: pointer;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    .service-box button:hover {
      background-color: #0077cc;
    }
    .footer {
  background-color:rgb(147, 234, 206);
  color:rgb(0, 0, 0);
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
  color:rgb(0, 0, 0);
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
  color:rgb(0, 0, 0);
  cursor: pointer;
  transition: color 0.3s, transform 0.3s;
}

.footer-social-icons i:hover {
  color: #00a8ff;
  transform: scale(1.1);
}

    /* Responsive Design */
    @media (max-width: 768px) {
      .services {
        flex-direction: column;
        align-items: center;
      }

      .service-box {
        width: 80%;
      }
    }
  </style>
</head>
<body>
  <nav class="navbar">
    <div class="logo">Eli.Proprete</div>
    <ul class="nav-links">
      <li><a href="homepage.php">Home</a></li>
      <li><a href="services.php">Services</a></li>
      <li><a href="our_work.php">Our Work</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
    <div class="social-icons">
      <i class="fab fa-facebook"></i>
      <i class="fab fa-twitter"></i>
      <i class="fab fa-linkedin"></i>
    </div>
  </nav>

  <section class="services">
    <div class="service-box">
      <i class="fas fa-water"></i>
      <h3>Bathroom Cleaning</h3>
      <p>Thorough and hygienic bathroom cleaning services.</p>
      <button class="read-more-btn" onclick="toggleInfo(this)">Read More</button>
      <p class="additional-info" style="display:none;">
        Our bathroom cleaning services include toilet cleaning and disinfection, sink and countertop cleaning, shower and bathtub scrubbing, mirror and glass cleaning, floor cleaning and sanitization, and cleaning and disinfecting high-touch areas.
      </p>
    </div>

    <div class="service-box">
      <i class="fas fa-broom"></i>
      <h3>General Cleaning</h3>
      <p>Comprehensive cleaning services for various spaces.</p>
      <button class="read-more-btn" onclick="toggleInfo(this)">Read More</button>
      <p class="additional-info" style="display:none;">
        Cleaning services offered for: Office, Premises/clinic (pharmacy, optician agency, travel agency), Staircase, Small shop, House, Apartment.
      </p>
    </div>

    <div class="service-box">
      <i class="fas fa-spray-can"></i>
      <h3>Specialized Cleaning</h3>
      <p>Expert cleaning for unique and specialized needs.</p>
      <button class="read-more-btn" onclick="toggleInfo(this)">Read More</button>
      <p class="additional-info" style="display:none;">
        We provide specialized cleaning for industrial spaces, medical facilities, and more.
      </p>
    </div>

    <div class="service-box">
      <i class="fas fa-building"></i>
      <h3>Office Cleaning</h3>
      <p>Keep your workspace clean and professional.</p>
      <button class="read-more-btn" onclick="toggleInfo(this)">Read More</button>
      <p class="additional-info" style="display:none;">
        Our office cleaning services ensure a tidy and organized workspace, including dusting, vacuuming, and sanitizing surfaces.
      </p>
    </div>

    <div class="service-box">
      <i class="fas fa-home"></i>
      <h3>House Cleaning</h3>
      <p>Comprehensive house cleaning services for a sparkling clean home.</p>
      <button class="read-more-btn" onclick="toggleInfo(this)">Read More</button>
      <p class="additional-info" style="display:none;">
        Our house cleaning services include dusting, vacuuming, mopping, and sanitizing surfaces, as well as cleaning and disinfecting high-touch areas.
      </p>
    </div>

    <div class="service-box">
      <i class="fas fa-couch"></i>
      <h3>Carpet and Sofa Cleaning</h3>
      <p>Expert cleaning for carpets and upholstery.</p>
      <button class="read-more-btn" onclick="toggleInfo(this)">Read More</button>
      <p class="additional-info" style="display:none;">
        We provide deep cleaning services for carpets and sofas, ensuring they look fresh and new.
      </p>
    </div>
  </section>

  <footer class="footer">
    <div class="footer-content">
      <p>&copy; 2025 Eli.Proprete. All rights reserved.</p>
      <ul class="footer-links">
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Terms of Service</a></li>
        <li><a href="#">FAQs</a></li>
      </ul>
    </div>
  </footer>

  <script>
    function toggleInfo(button) {
      const additionalInfo = button.nextElementSibling;
      if (additionalInfo.style.display === "none") {
        additionalInfo.style.display = "block";
        button.textContent = "Read Less";
      } else {
        additionalInfo.style.display = "none";
        button.textContent = "Read More";
      }
    }
  </script>
</body>
</html>