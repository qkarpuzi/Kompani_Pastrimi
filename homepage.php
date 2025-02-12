<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cleaning Company</title>
  <link rel="stylesheet" href="../Cleaning Company/assests/style.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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

  <header class="hero">
    <div class="hero-content">
      <h1>Clean</h1>
      <p>An ultimate cleaning template for your business</p>
    </div>
  </header>
  <!-- SERVICES SECTION -->
<section id="services" class="services">
<div class="service-box">
    <i class="fas fa-water"></i> <!-- Plumbing Icon -->
    <h3>Bathroom Cleaning</h3>
    <p>Thorough and hygienic bathroom cleaning services.</p>
    <button class="read-more-btn" onclick="toggleInfo(this)">Read More</button>
    <p class="additional-info" style="display:none;">
      Our bathroom cleaning services include toilet cleaning and disinfection, sink and countertop cleaning, shower and bathtub scrubbing, mirror and glass cleaning, floor cleaning and sanitization, and cleaning and disinfecting high-touch areas.
      <br>
      Nos services de nettoyage de salle de bain comprennent le nettoyage et la désinfection des toilettes, le nettoyage de l'évier et du plan de travail, le frottement de la douche et de la baignoire, le nettoyage des miroirs et des surfaces en verre, le nettoyage et la désinfection des sols, ainsi que le nettoyage et la désinfection des zones à fort contact.
    </p>
  </div>
  
  <div class="service-box">
    <i class="fas fa-broom"></i> <!-- Cleaning Icon -->
    <h3>Cleaning</h3>
    <p>Spotless and detailed cleaning services.</p>
    <button class="read-more-btn" onclick="toggleInfo(this)">Read More</button>
    <p class="additional-info" style="display:none;">Our cleaning includes deep cleaning, dusting, and sanitization.</p>
  </div>



  <div class="service-box">
    <i class="fas fa-spray-can"></i> <!-- Specialized Cleaning Icon -->
    <h3>Specialized Cleaning</h3>
    <p>Expert cleaning for unique and specialized needs.</p>
    <button class="read-more-btn" onclick="toggleInfo(this)">Read More</button>
    <p class="additional-info" style="display:none;">We provide specialized cleaning for industrial spaces, medical facilities, and more.</p>
  </div>
</section>




<section class="about-us">
  <div class="container">
    <div class="about-content">
      <div class="text">
        <h2>About Us</h2>
        <p>
          Hello, I am Karpuz-Avdiu Mexhide, an independent housekeeper with 15 years of experience. For a spotless interior and peace of mind, contact me if you are interested in the Grand Nancy area. I am punctual, detail-oriented, and respect eco-friendly products. If you have any questions, please contact me at the provided phone number. I respond quickly.
        </p>
        <h3>Contact Information:</h3>
        <ul>
          <li><strong>Name:</strong> Karpuz-Avdiu Mexhide</li>
          <li><strong>Email:</strong> <a href="mailto:eli.proprete@outlook.fr">eli.proprete@outlook.fr</a></li>
          <li><strong>Phone:</strong> 06.66.30.09.62</li>
        </ul>
      </div>
      <div class="image">
        <img src="https://www.shutterstock.com/image-vector/professional-cleaner-sanitizing-spray-mop-600nw-2180256097.jpg" alt="Karpuz-Avdiu Mexhide" />
      </div>
    </div>
  </div>
</section>


<section class="cleaning-services">
    <div class="hero-section">
        <h3 class="sub-title">Why Choose Us?</h3>
        <h1 class="main-title">We will make any place clean and tidy.</h1>
        <p class="description">
            Our team of experts is dedicated to making your space spotless. With top-quality 
            products and professional techniques, we ensure a fresh and clean environment for 
            your home or office.
        </p>
        <div class="features">
            <div class="feature-box">
                <i class="fas fa-broom"></i>
                <p>Over 2500+ Services</p>
            </div>
            <div class="feature-box">
                <i class="fas fa-leaf"></i>
                <p>Eco-Friendly Products</p>
            </div>
            <div class="feature-box">
                <i class="fas fa-smile"></i>
                <p>100% Satisfaction</p>
            </div>
            <div class="feature-box">
                <i class="fas fa-dollar-sign"></i>
                <p>Cost-Effective</p>
            </div>
        </div>
    </div>

    <div class="stats-section">
        <h3 class="company-title">Company Statistics</h3>
        <h2 class="stats-heading">We Completed 2500+ Cleaning Services</h2>
        <div class="stats-container">
            <div class="stat-box">
                <i class="fas fa-users"></i>
                <h3>350+</h3>
                <p>Client Satisfaction</p>
            </div>
            <div class="stat-box">
                <i class="fas fa-building"></i>
                <h3>500+</h3>
                <p>Businesses Served</p>
            </div>
            <div class="stat-box">
                <i class="fas fa-calendar-alt"></i>
                <h3>15+</h3>
                <p>Years of Service</p>
            </div>
            <div class="stat-box">
                <i class="fas fa-users-cog"></i>
                <h3>10+</h3>
                <p>Professional Staff</p>
            </div>
        </div>
    </div>
</section>






<style>
  body {
  margin: 0;
  font-family: 'Poppins', sans-serif;
  color: #333;
  background-color:rgb(249, 249, 249);
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

/* Hero Section */
.hero {
  position: relative;
  height: 100vh;
  text-align: center;
  background: url("https://static.vecteezy.com/system/resources/previews/036/594/734/non_2x/ai-generated-cleaning-company-advertisment-background-with-copy-space-free-photo.jpg") no-repeat center center;
  background-size: cover;
  background-attachment: fixed;
}

.hero::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.3);
}

.hero .hero-content {
  position: relative;
  color: white;
  padding: 100px 20px;
}

.hero h1 {
  font-size: 60px;
  font-weight: 700;
  margin-bottom: 10px;
}

.hero p {
  font-size: 18px;
  font-weight: 300;
  margin-top: 0;
}

/* Services Section */
.services {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 20px;
  padding: 50px 20px;
  background:rgb(161, 232, 222);
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
}

.service-box {
  background:rgb(249, 249, 249);
  padding: 20px;
  border: 1px solid #ddd;
  border-radius: 10px;
  text-align: center;
  transition: transform 0.3s, box-shadow 0.3s;
}

.service-box:hover {
  transform: translateY(-5px);
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

.service-box h3 {
  font-size: 20px;
  color: #00a8ff;
  margin-bottom: 10px;
}

.service-box p {
  font-size: 14px;
  color: #555;
  line-height: 1.6;
}

/* About Us Section */
.about {
  padding: 50px 20px;
  text-align: center;
  background:rgb(255, 255, 255);
}

.about h2 {
  font-size: 36px;
  color: #333;
  margin-bottom: 20px;
}

.about p {
  font-size: 16px;
  line-height: 1.8;
  color: #555;
}

/* Team Section */
.team {
  padding: 50px 20px;
  background: #f9f9f9;
  text-align: center;
}

.team h2 {
  font-size: 36px;
  color: #333;
  margin-bottom: 30px;
}

.team-member {
  display: inline-block;
  text-align: center;
  margin: 15px;
}

.team-member img {
  width: 120px;
  height: 120px;
  border-radius: 50%;
  border: 2px solid #00a8ff;
  margin-bottom: 10px;
}

.team-member h3 {
  font-size: 18px;
  color: #333;
  margin: 5px 0;
}

.team-member p {
  font-size: 14px;
  color: #777;
}

/* Testimonials Section */
.testimonials {
  background-color: #ffffff;
  padding: 50px 20px;
  text-align: center;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
}

.testimonials h2 {
  font-size: 36px;
  color: #333;
  margin-bottom: 30px;
  font-weight: 600;
}

.testimonial {
  background: #f9f9f9;
  margin: 20px auto;
  max-width: 600px;
  padding: 20px;
  border: 1px solid #ddd;
  border-radius: 10px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s, box-shadow 0.3s;
}

.testimonial:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
}

.testimonial p {
  font-size: 18px;
  color: #555;
  margin-bottom: 10px;
  line-height: 1.6;
}

.testimonial h4 {
  font-size: 16px;
  color: #00a8ff;
  font-weight: 600;
  margin: 0;
}

/* Gallery Section */
.gallery {
  background-color: #f9f9f9;
  padding: 50px 20px;
  text-align: center;
}

.gallery h2 {
  font-size: 36px;
  color: #333;
  margin-bottom: 30px;
  font-weight: 600;
}

.gallery-images {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 20px;
  margin-top: 20px;
}

.gallery-images img {
  width: 100%;
  border-radius: 10px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.gallery-images img:hover {
  transform: scale(1.05);
  box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
}

/* Footer Section */
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
  .gallery-images {
    grid-template-columns: 1fr;
  }
}
  .about-us {
    background-color: #f9f9f9;
    padding: 40px 0;
    font-family: 'Arial', sans-serif;
  }

  .container {
    width: 90%;
    max-width: 1200px;
    margin: 0 auto;
  }

  .about-content {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
  }

  .text {
    flex: 1;
    margin-right: 30px;
  }

  .text h2 {
    font-size: 32px;
    color: #333;
    margin-bottom: 20px;
    font-weight: bold;
  }

  .text p {
    font-size: 16px;
    line-height: 1.8;
    color: #555;
    margin-bottom: 20px;
  }

  .text h3 {
    font-size: 20px;
    color: #333;
    margin-bottom: 10px;
  }

  .text ul {
    list-style-type: none;
    padding: 0;
  }

  .text ul li {
    font-size: 16px;
    color: #555;
    margin-bottom: 10px;
  }

  .text ul li strong {
    color: #333;
  }

  .image {
    flex: 0 0 40%;
    text-align: center;
  }

  .image img {
    max-width: 100%;
    height: auto;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  @media (max-width: 768px) {
    .about-content {
      flex-direction: column;
      text-align: center;
    }

    .image {
      margin-top: 20px;
    }

    .text {
      margin-right: 0;
    }
  }
  /* Read More Button Styles */
.read-more-btn {
  background-color: #00a8ff; /* Light blue background */
  color: white; /* White text */
  border: none; /* Remove default border */
  padding: 10px 20px; /* Add padding */
  text-align: center; /* Center text */
  text-decoration: none; /* Remove underline */
  display: inline-block; /* Display as inline element */
  font-size: 14px; /* Set font size */
  cursor: pointer; /* Show pointer cursor on hover */
  border-radius: 5px; /* Rounded corners */
  transition: background-color 0.3s ease, transform 0.3s ease; /* Smooth transition for background color and scale */
}

.read-more-btn:hover {
  background-color: #0077cc; /* Darker blue on hover */
  transform: scale(1.05); /* Slightly enlarge the button on hover */
}

.read-more-btn:focus {
  outline: none; /* Remove outline on focus */
}
/* About Us Section Styles */
.about-us {
  padding: 50px 0;
  background-color: #f9f9f9;
  text-align: center;
}

.about-us .container {
  max-width: 800px;
  margin: 0 auto;
}

.about-us h2 {
  font-size: 2.5em;
  margin-bottom: 20px;
  color: #333;
}

.about-us p {
  font-size: 1.1em;
  line-height: 1.6;
  color: #666;
  margin-bottom: 20px;
}

.services {
    display: flex;
    justify-content: center;
    margin-top: 50px;
    padding: 50px 0;
  }

  .service-box {
    background: #fff;
    border-radius: 8px;
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
    margin: 0 20px;
    padding: 30px;
    text-align: center;
    width: 300px;
    transition: transform 0.3s ease;
  }

  .service-box:hover {
    transform: translateY(-15px);
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

  /* Responsive Design */
  @media (max-width: 768px) {
    .services {
      flex-direction: column;
    }

    .service-box {
      margin-bottom: 30px;
    }
  }
  .message-input {
  background-color: #ffffff;
  padding: 30px;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  max-width: 600px;
  margin: 20px auto;
  text-align: center;
}

.message-input h3 {
  font-size: 1.8em;
  color: #333;
  margin-bottom: 20px;
  font-weight: 600;
}

.message-input form {
  display: flex;
  flex-direction: column;
  gap: 15px;
}

.message-input textarea {
  width: 100%;
  padding: 15px;
  font-size: 1em;
  color: #333;
  border: 1px solid #ddd;
  border-radius: 8px;
  resize: vertical;
  transition: border-color 0.3s ease;
}

.message-input textarea:focus {
  outline: none;
  border-color: #4A90E2; /* Blue border on focus */
}

.message-input button {
  background-color: #4A90E2; /* Blue button */
  color: #fff;
  border: none;
  padding: 12px 20px;
  font-size: 1.1em;
  border-radius: 8px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.message-input button:hover {
  background-color: #357ab7; /* Darker blue on hover */
}

.message-input button:active {
  background-color: #2a6699; /* Even darker blue on click */
}
.cleaning-services {
    font-family: 'Poppins', sans-serif;
    text-align: center;
    color: white;
}

.hero-section {
    background:rgb(60, 216, 135);
    padding: 50px 20px;
}

.sub-title {
    font-size: 18px;
    text-transform: uppercase;
    color: #ffdd00;
}

.main-title {
    font-size: 36px;
    font-weight: bold;
    margin-top: 10px;
}

.description {
    font-size: 16px;
    max-width: 600px;
    margin: 10px auto;
}

.features {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 20px;
    flex-wrap: wrap;
}

.feature-box {
    background:rgb(0, 234, 255);
    padding: 15px;
    border-radius: 10px;
    width: 160px;
    text-align: center;
    color: black;
    font-weight: bold;
}

.feature-box img {
    width: 40px;
    height: 40px;
    margin-bottom: 10px;
}

.stats-section {
    background: white;
    color: black;
    padding: 50px 20px;
}

.company-title {
    font-size: 18px;
    text-transform: uppercase;
    color: #0033cc;
}

.stats-heading {
    font-size: 32px;
    font-weight: bold;
    margin-bottom: 20px;
}

.stats-container {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
}

.stat-box {
    background: #f8f8f8;
    padding: 20px;
    border-radius: 10px;
    width: 160px;
    text-align: center;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.stat-box h3 {
    font-size: 28px;
    color: #0033cc;
    margin-bottom: 5px;
}

.stat-box p {
    font-size: 14px;
}


</style>
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


  
  

  <section class="testimonials">
    <h2>What Our Clients Say</h2>
    <div class="testimonial">
      <p>"The cleaning service was top-notch! Highly recommend!"</p>
      <h4>- Sarah J.</h4>
    </div>
    <div class="testimonial">
      <p>"Quick and reliable plumbing services. Thank you!"</p>
      <h4>- Michael K.</h4>
    </div>
  </section>


  <!-- HTML: Add this part where you want the message input to appear -->
<div class="message-input">
    <h3>Send Us a Message</h3>
    <form action="send_message.php" method="POST">
        <textarea name="message" rows="4" placeholder="Enter your message..." required></textarea>
        <button type="submit">Send</button>
    </form>
</div>




  <footer class="footer">
    <div class="footer-content">
      <p>&copy; 2025 WeClean. All rights reserved.</p>
      <ul class="footer-links">
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Terms of Service</a></li>
        <li><a href="#">FAQs</a></li>
      </ul>
    </div>
  </footer>

  <script>
    const menu = document.querySelector('.hamburger-menu');
    const navLinks = document.querySelector('.nav-links');
    
    menu.addEventListener('click', () => {
      navLinks.classList.toggle('active');
    });
  </script>
</body>
</html>
