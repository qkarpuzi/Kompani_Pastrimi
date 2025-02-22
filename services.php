<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Services de nettoyage</title>
  <!-- Logon E kompanis -->
  <link rel="shortcut icon" href="Eli.png" type="image/x-icon">
  <link rel="stylesheet" href="../Cleaning Company/assests/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>

/* Global Styles */
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

/* Footer Styles */
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

/* Responsive Styles */

/* For Small Devices (Mobile) */
@media (max-width: 768px) {

  /* Navbar */
  .navbar {
    flex-direction: column;
    align-items: flex-start;
    padding: 10px;
  }

  .navbar .nav-links {
    flex-direction: column;
    gap: 10px;
    align-items: flex-start;
  }

  .navbar .logo {
    font-size: 20px;
  }

  .navbar .nav-links li a {
    font-size: 14px;
  }

  /* Services */
  .services {
    padding: 30px 10px;
  }

  .service-box {
    width: 80%;
    margin: 15px 0;
  }

  /* Footer */
  .footer {
    padding: 20px 10px;
  }

  .footer-links {
    flex-direction: column;
    gap: 10px;
  }

  .footer-social-icons {
    gap: 15px;
  }

  .footer-social-icons i {
    font-size: 20px;
  }
}

/* For Medium Devices (Tablets) */
@media (max-width: 1024px) {

  /* Navbar */
  .navbar {
    flex-direction: column;
    align-items: flex-start;
    padding: 10px;
  }

  .navbar .nav-links {
    flex-direction: column;
    gap: 15px;
    align-items: flex-start;
  }

  .navbar .logo {
    font-size: 22px;
  }

  .navbar .nav-links li a {
    font-size: 15px;
  }

  /* Services */
  .services {
    padding: 40px 15px;
  }

  .service-box {
    width: 45%;
    margin: 20px 10px;
  }

  /* Footer */
  .footer {
    padding: 25px 15px;
  }

  .footer-links {
    flex-direction: row;
    justify-content: center;
  }

  .footer-social-icons {
    gap: 20px;
  }

  .footer-social-icons i {
    font-size: 22px;
  }
}

/* For Larger Devices (Desktops) */
@media (min-width: 1025px) {

  /* Navbar */
  .navbar {
    padding: 15px 20px;
    justify-content: space-between;
  }

  .navbar .nav-links {
    flex-direction: row;
    gap: 20px;
    align-items: center;
  }

  .navbar .logo {
    font-size: 24px;
  }

  .navbar .nav-links li a {
    font-size: 16px;
  }

  /* Services */
  .services {
    padding: 50px 20px;
  }

  .service-box {
    width: 300px;
    margin: 20px;
  }

  /* Footer */
  .footer {
    padding: 30px 20px;
  }

  .footer-links {
    flex-direction: row;
    justify-content: center;
  }

  .footer-social-icons {
    gap: 25px;
  }

  .footer-social-icons i {
    font-size: 24px;
  }
}

  </style>
</head>
<body>
  <nav class="navbar">
    <div class="logo">Eli.Proprete</div>
    <ul class="nav-links">
  <li><a href="index.php">Accueil</a></li>
  <li><a href="services.php">Services</a></li>
  <li><a href="our_work.php">Nos Travaux</a></li>
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
    <h3>Nettoyage de Salle de Bain</h3>
    <p>Services de nettoyage approfondi et hygiénique pour les salles de bain.</p>
    <button class="read-more-btn" onclick="toggleInfo(this)">Lire la suite</button>
    <p class="additional-info" style="display:none;">
      Nos services de nettoyage de salle de bain incluent le nettoyage et la désinfection des toilettes, le nettoyage des lavabos et comptoirs, le frottement des douches et baignoires, le nettoyage des miroirs et vitres, le nettoyage des sols et la désinfection des zones fréquemment touchées.
    </p>
  </div>

  <div class="service-box">
    <i class="fas fa-broom"></i>
    <h3>Nettoyage Général</h3>
    <p>Services de nettoyage complet pour divers espaces.</p>
    <button class="read-more-btn" onclick="toggleInfo(this)">Lire la suite</button>
    <p class="additional-info" style="display:none;">
      Services de nettoyage proposés pour : Bureaux, Locaux/Cliniques (pharmacie, opticien, agence de voyage), Escalier, Petit magasin, Maison, Appartement.
    </p>
  </div>

  <div class="service-box">
    <i class="fas fa-spray-can"></i>
    <h3>Nettoyage Spécialisé</h3>
    <p>Nettoyage expert pour des besoins uniques et spécialisés.</p>
    <button class="read-more-btn" onclick="toggleInfo(this)">Lire la suite</button>
    <p class="additional-info" style="display:none;">
      Nous fournissons un nettoyage spécialisé pour les espaces industriels, les établissements médicaux et plus encore.
    </p>
  </div>

  <div class="service-box">
    <i class="fas fa-building"></i>
    <h3>Nettoyage de Bureau</h3>
    <p>Gardez votre espace de travail propre et professionnel.</p>
    <button class="read-more-btn" onclick="toggleInfo(this)">Lire la suite</button>
    <p class="additional-info" style="display:none;">
      Nos services de nettoyage de bureau garantissent un espace de travail propre et organisé, incluant le dépoussiérage, l'aspiration et la désinfection des surfaces.
    </p>
  </div>

  <div class="service-box">
    <i class="fas fa-home"></i>
    <h3>Nettoyage de Maison</h3>
    <p>Services de nettoyage complets pour une maison éclatante de propreté.</p>
    <button class="read-more-btn" onclick="toggleInfo(this)">Lire la suite</button>
    <p class="additional-info" style="display:none;">
      Nos services de nettoyage de maison incluent le dépoussiérage, l'aspiration, le lavage des sols, ainsi que le nettoyage et la désinfection des surfaces, ainsi que le nettoyage des zones fréquemment touchées.
    </p>
  </div>

  <div class="service-box">
    <i class="fas fa-couch"></i>
    <h3>Nettoyage de Tapis et Canapés</h3>
    <p>Nettoyage expert pour les tapis et les tissus d'ameublement.</p>
    <button class="read-more-btn" onclick="toggleInfo(this)">Lire la suite</button>
    <p class="additional-info" style="display:none;">
      Nous proposons des services de nettoyage en profondeur pour les tapis et les canapés, en veillant à ce qu'ils paraissent frais et comme neufs.
    </p>
  </div>
</section>

<footer class="footer">
  <div class="footer-content">
    <p>&copy; 2025 Eli.Proprete. Tous droits réservés.</p>
    <ul class="footer-links">
      <li><a href="#">Politique de confidentialité</a></li>
      <li><a href="#">Conditions d'utilisation</a></li>
      <li><a href="#">FAQ</a></li>
    </ul>
  </div>
</footer>


  <script>
    function toggleInfo(button) {
      const additionalInfo = button.nextElementSibling;
      if (additionalInfo.style.display === "none") {
        additionalInfo.style.display = "block";
        button.textContent = "Lire moins";
      } else {
        additionalInfo.style.display = "none";
        button.textContent = "En savoir plus";
      }
    }
  </script>
</body>
</html>