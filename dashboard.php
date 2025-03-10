<?php
// Include the existing database connection file
include_once 'db_connection.php';  // Ensure the path to db_connection.php is correct

// Delete functionality
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    $image_id = $_POST['image_id']; // Get the image ID to delete

    // Fetch image URL from the database
    $stmt = $conn->prepare("SELECT image_url FROM gallery WHERE id = ?");
    $stmt->bind_param("i", $image_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $image = $result->fetch_assoc();
    
    if ($image) {
        $image_url = $image['image_url'];
        
        // Delete the file from the server
        if (file_exists($image_url)) {
            unlink($image_url); // Remove the file
        }
        
        // Delete record from the database
        $stmt = $conn->prepare("DELETE FROM gallery WHERE id = ?");
        $stmt->bind_param("i", $image_id);
        
        if ($stmt->execute()) {
            echo "Image deleted successfully!";
        } else {
            echo "Error deleting image: " . $stmt->error;
        }
    }
}

// Fetch the total number of clients
$sql = "SELECT COUNT(*) as total FROM clients"; 
$result = $conn->query($sql);

if ($result) {
    $row = $result->fetch_assoc();
    $clients_count = $row['total']; // Assign the count value
} else {
    $clients_count = 0; // Default to 0 if the query fails
}

// Ensure $clients_count is always initialized
$clients_count = $clients_count ?? 0;
?>

<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>












<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <!-- Logon E kompanis -->
  <link rel="shortcut icon" href="mexhide.png" type="image/x-icon">
  <link rel="stylesheet" href="../Cleaning Company/assests/dashboard.css">
  
  <style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Body and Layout */
body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background-color: #f4f7f9;
  color: #333333;
  line-height: 1.6;
  display: flex;
  min-height: 100vh;
  flex-direction: column;
}

/* Sidebar Styling */
.sidebar {
  width: 240px;
  background-color: #2c3e50;
  color: #ffffff;
  height: 100vh;
  padding: 40px 20px;
  position: fixed;
  top: 0;
  left: 0;
  box-shadow: 4px 0 20px rgba(0, 0, 0, 0.1);
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  border-radius: 0 20px 20px 0;
  z-index: 1000;
}

/* Sidebar Header */
.sidebar-header h2 {
  font-size: 24px;
  font-weight: 600;
  text-transform: uppercase;
  text-align: center;
  margin-bottom: 40px;
  letter-spacing: 1px;
}

/* Sidebar Links */
.sidebar-links {
  list-style-type: none;
  padding: 0;
}

.sidebar-links li {
  margin: 20px 0;
}

.sidebar-links a {
  text-decoration: none;
  color: #ecf0f1;
  font-size: 16px;
  display: flex;
  align-items: center;
  padding: 12px 16px;
  border-radius: 6px;
  transition: background-color 0.3s ease, padding-left 0.3s ease;
}

.sidebar-links a:hover {
  background-color: #34495e;
  padding-left: 20px;
}

.sidebar-links a:active {
  background-color: #1c2833;
}

/* Sidebar Link Icons */
.sidebar-links a i {
  font-size: 20px;
  margin-right: 12px;
}

/* Main Content Area */
.main-content {
  background-color: skyblue;
  margin-left: 240px;
  padding: 40px;
  width: calc(100% - 240px);
  transition: margin-left 0.3s ease;
}

/* Hero Section */
.hero {
  background-color: #34495e;
  color: #ecf0f1;
  padding: 60px 40px;
  text-align: center;
  border-radius: 8px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  margin-bottom: 40px;
}

.hero h1 {
  font-size: 36px;
  font-weight: 600;
  letter-spacing: 1px;
}

.hero p {
  font-size: 18px;
  margin-top: 20px;
  color: rgba(236, 240, 241, 0.8);
}

/* Overview Section */
.overview {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
  gap: 30px;
}

.overview-item {
  background-color: #ffffff;
  padding: 30px;
  text-align: center;
  border-radius: 8px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.overview-item:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

.overview-item h3 {
  font-size: 20px;
  color: #2c3e50;
  margin-bottom: 15px;
  font-weight: 600;
}

.overview-item p {
  font-size: 14px;
  color: #7f8c8d;
}

/* Upload Section */
.upload-section {
  margin-top: 50px;
  padding: 40px;
  border-radius: 8px;
  background-color: #ffffff;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
}

.upload-section h2 {
  font-size: 28px;
  font-weight: 600;
  color: #2c3e50;
  margin-bottom: 25px;
}

.upload-section form input,
.upload-section form textarea,
.upload-section form button {
  width: 100%;
  padding: 12px;
  margin-bottom: 20px;
  border: 1px solid #ddd;
  border-radius: 6px;
  font-size: 16px;
}

.upload-section form button {
  background-color: #3498db;
  color: #fff;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.upload-section form button:hover {
  background-color: #2980b9;
}

/* Project Section */
.project-container {
  width: 100%;
  margin-top: 20px;
}

/* Project Item Styles */
.project-item {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 20px;
  background-color: #ffffff;
  border-radius: 8px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
  margin-bottom: 20px;
  transition: transform 0.3s ease;
}

.project-item:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

.project-item img {
  max-width: 80px;
  max-height: 80px;
  object-fit: cover;
  margin-right: 20px;
}

.project-item .delete-btn {
  background-color: #e74c3c;
  color: #ffffff;
  border: none;
  padding: 8px 12px;
  cursor: pointer;
  border-radius: 6px;
  transition: background-color 0.3s ease;
}

.project-item .delete-btn:hover {
  background-color: #c0392b;
}

/* Footer Section */
footer {
  background-color: #34495e;
  color: #ecf0f1;
  padding: 40px;
  text-align: center;
  border-radius: 8px;
  margin-top: 50px;
}

footer p {
  font-size: 14px;
  color: rgba(236, 240, 241, 0.7);
}

/* Media Queries for Responsiveness */
@media (max-width: 1024px) {
  .sidebar {
    width: 200px;
  }

  .main-content {
    margin-left: 200px;
    width: calc(100% - 200px);
  }

  .hero h1 {
    font-size: 32px;
  }

  .overview {
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  }
}

@media (max-width: 768px) {
  .sidebar {
    width: 180px;
    padding: 20px 10px;
  }

  .main-content {
    margin-left: 180px;
    width: calc(100% - 180px);
    padding: 20px;
  }

  .hero {
    padding: 40px 20px;
  }

  .hero h1 {
    font-size: 28px;
  }

  .hero p {
    font-size: 16px;
  }

  .overview {
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: 20px;
  }

  .overview-item {
    padding: 20px;
  }

  .upload-section {
    padding: 20px;
  }

  .upload-section h2 {
    font-size: 24px;
  }

  .upload-section form input,
  .upload-section form textarea,
  .upload-section form button {
    font-size: 14px;
  }
}

@media (max-width: 480px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
    padding: 20px;
    border-radius: 0;
    box-shadow: none;
  }

  .main-content {
    margin-left: 0;
    width: 100%;
    padding: 20px;
  }

  .hero h1 {
    font-size: 24px;
  }

  .hero p {
    font-size: 14px;
  }

  .overview {
    grid-template-columns: 1fr;
  }

  .overview-item {
    padding: 15px;
  }

  .upload-section {
    padding: 15px;
  }

  .upload-section h2 {
    font-size: 20px;
  }

  .upload-section form input,
  .upload-section form textarea,
  .upload-section form button {
    font-size: 12px;
  }

  .project-item {
    flex-direction: column;
    align-items: flex-start;
  }

  .project-item img {
    margin-right: 0;
    margin-bottom: 10px;
  }
}
</style>
</head>
<body>
  <!-- Sidebar -->
  <div class="sidebar">
    <div class="sidebar-header">
      <h2>Eli.Proprete</h2>
      </div>
<ul class="sidebar-links">
  <li><a href="#">Tableau de bord</a></li>
  <li><a href="clients.php">Clients</a></li>
  <li><a href="messages.php">Messages</a></li>
  <li><a href="index.php">Accueil</a></li>
</ul>
</div>


  <!-- Main Content -->
  <div class="main-content">
    <!-- Hero Section -->
    <header class="hero">
      <h1>Bienvenue sur le tableau de bord d'Eli.Proprete</h1>
      <p>Gérez vos projets et vos clients efficacement et facilement.</p>
    </header>

    <?php
// Fetch the count of messages
$message_count_query = "SELECT COUNT(*) AS message_count FROM messages"; // Assuming you have a 'messages' table
$message_result = $conn->query($message_count_query);
$message_count = 0;
if ($message_result->num_rows > 0) {
    $row = $message_result->fetch_assoc();
    $message_count = $row['message_count'];
}
?>
<!-- Section Vue d'ensemble -->
<section class="overview">
<div class="project-container">
<div id="total-projects">1 Projet au total</div>

    <!-- Plus d'éléments de projet -->
</div>
<div class="overview-item">
  <a href="clients.php">
    <h3>Total des clients</h3>
    <p><?php echo $clients_count; ?></p>
  </a>
</div>
  <div class="overview-item">
  <a href="messages.php">
    <h3>Messages</h3>
    </a>
    <p><?php echo $message_count; ?></p> <!-- Affichage dynamique du nombre de messages -->
  </div>
</section>



<script>
  window.onload = function() {
    const projectItems = document.querySelectorAll('.project-item');
    const totalProjectsText = document.querySelector('#total-projects');
    totalProjectsText.innerText = `${projectItems.length} Total Projects`;
}

</script>




    <!-- Upload Section -->
    <section class="upload-section">
  <h2>Télécharger un Projet</h2>
  <form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="title" placeholder="Titre du projet" required>
    <textarea name="description" rows="4" placeholder="Description du projet"></textarea>
    <input type="file" name="image" accept="image/*" required>
    <button type="submit">Télécharger le projet</button>
  </form>
</section>

<!-- Section des Projets -->
<section class="projects-section">
  <h2>Projets Téléchargés</h2>
  <div class="projects">

        <?php
        // Fetch all uploaded projects from the database
        $result = $conn->query("SELECT * FROM gallery");
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='project-item'>";
                echo "<div class='project-info'>";
                echo "<img src='" . $row['image_url'] . "' alt='" . $row['title'] . "'>";
                echo "<div>";
                echo "<h3>" . $row['title'] . "</h3>";
                echo "<p>" . $row['description'] . "</p>";
                echo "</div>";
                echo "</div>";
                echo "<form action='dashboard.php' method='POST'>";
                echo "<input type='hidden' name='image_id' value='" . $row['id'] . "'>";
                echo "<button type='submit' name='delete' class='delete-btn'>Delete</button>";
                echo "</form>";
                echo "</div>";
            }
        } else {
            echo "<p>No projects uploaded yet.</p>";
        }
        ?>
      </div>
    </section>
  </div>
</body>
</html>
