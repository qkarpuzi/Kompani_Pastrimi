<?php
// Establish database connection
$servername = "localhost";
$username = "root"; // Replace with your DB username
$password = "";     // Replace with your DB password
$dbname = "kompani_pastrimi";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle file upload
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
    $title = htmlspecialchars($_POST['title']);
    $description = htmlspecialchars($_POST['description']);
    $targetDir = "uploads/";

    // Ensure the uploads directory exists
    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    $imageName = basename($_FILES['image']['name']);
    $fileType = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));

    // Allowed file types
    $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];

    // Check if the file type is allowed
    if (!in_array($fileType, $allowedTypes)) {
        echo "<script>alert('Only JPG, JPEG, PNG, and GIF files are allowed.');</script>";
    } else {
        // Rename the image to avoid conflicts
        $newImageName = time() . "_" . $imageName;
        $targetFile = $targetDir . $newImageName;

        // Upload the file
        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
            // Prepare SQL query using prepared statements
            $stmt = $conn->prepare("INSERT INTO gallery (title, description, image_url) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $title, $description, $targetFile);

            if ($stmt->execute()) {
                echo "<script>alert('Upload successful!');</script>";
            } else {
                echo "<script>alert('Database error: " . $stmt->error . "');</script>";
            }

            $stmt->close();
        } else {
            echo "<script>alert('File upload failed.');</script>";
        }
    }
}

// Fetch gallery items
$sql = "SELECT * FROM gallery ORDER BY uploaded_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Notre travail</title>
  <!-- Logon E kompanis -->
  <link rel="shortcut icon" href="Eli.png" type="image/x-icon">
  <link rel="stylesheet" href="../Cleaning Company/assests/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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

    .upload-form {
      max-width: 600px;
      margin: 30px auto;
      padding: 20px;
      background: #ffffff;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .upload-form h2 {
      text-align: center;
      color: #333;
      margin-bottom: 20px;
    }
    .upload-form input, .upload-form textarea, .upload-form button {
      width: 100%;
      margin-bottom: 15px;
      padding: 12px;
      border: 1px solid #ddd;
      border-radius: 8px;
    }
    .upload-form button {
      background-color: #0056b3;
      color: #fff;
      font-weight: 600;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    .upload-form button:hover {
      background-color: #003f8a;
    }
    .gallery-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 20px;
      padding: 30px;
      max-width: 1200px;
      margin: auto;
    }
    .gallery-item {
      background: #fff;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }
    .gallery-item:hover {
      transform: scale(1.02);
    }
    .gallery-item img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }
    .gallery-item h3 {
      font-size: 1.2em;
      padding: 10px 15px;
      color: #333;
    }
    .gallery-item button {
      background-color: #0056b3;
      color: #fff;
      border: none;
      padding: 10px;
      width: 100%;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    .gallery-item button:hover {
      background-color: #003f8a;
    }
    .modal {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.8);
      justify-content: center;
      align-items: center;
      z-index: 1000;
    }
    .modal-content {
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      max-width: 600px;
      text-align: center;
    }
    .modal-content img {
      width: 100%;
      border-radius: 10px;
    }
    .modal-content h3, .modal-content p {
      margin: 10px 0;
    }
    .modal-close {
      background: #333;
      color: #fff;
      border: none;
      padding: 10px 20px;
      cursor: pointer;
      border-radius: 5px;
      margin-top: 20px;
    }
  </style>
</head>
<body>

<nav class="navbar">
  <div class="logo">Eli.Proprete</div>
  <ul class="nav-links">
    <li><a href="homepage.php">Accueil</a></li>
    <li><a href="services.php">Services</a></li>
    <li><a href="contact.php">Contact</a></li>
  </ul>
</nav>


<section class="gallery">
  <div class="gallery-container">
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $title = htmlspecialchars($row['title'], ENT_QUOTES);
            $description = htmlspecialchars($row['description'], ENT_QUOTES);
            $imageUrl = htmlspecialchars($row['image_url'], ENT_QUOTES);

            echo '<div class="gallery-item">';
            echo '<img src="' . $imageUrl . '" alt="' . $title . '">';
            echo '<h3>' . $title . '</h3>';
            echo '<button 
                    class="read-more-btn" 
                    data-title="' . $title . '" 
                    data-description="' . $description . '" 
                    data-image="' . $imageUrl . '">
                    En savoir plus
                  </button>';
            echo '</div>';
        }
    } else {
        echo "<p>Aucun travail n'a encore été téléchargé !</p>";
    }
    ?>
  </div>
</section>

<div id="modal" class="modal">
  <div class="modal-content">
    <img id="modal-image" src="" alt="">
    <h3 id="modal-title"></h3>
    <p id="modal-description"></p>
    <button class="modal-close" onclick="closeModal()">Close</button>
  </div>
</div>

<script>
  // Add event listeners to buttons dynamically
  document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.read-more-btn').forEach(button => {
      button.addEventListener('click', function () {
        const title = this.getAttribute('data-title');
        const description = this.getAttribute('data-description');
        const imageUrl = this.getAttribute('data-image');

        // Populate modal with the data
        document.getElementById('modal').style.display = 'flex';
        document.getElementById('modal-title').innerText = title;
        document.getElementById('modal-description').innerText = description;
        document.getElementById('modal-image').src = imageUrl;
      });
    });
  });

  // Function to close the modal
  function closeModal() {
    document.getElementById('modal').style.display = 'none';
  }
</script>

</body>
</html>
