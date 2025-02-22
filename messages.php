<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "kompani_pastrimi");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle message deletion
if (isset($_GET['delete'])) {
    $messageId = $_GET['delete'];
    $conn->query("DELETE FROM messages WHERE id = $messageId");
    header("Location: messages.php");
    exit();
}

// Fetch messages from the database
$result = $conn->query("SELECT id, message_content, timestamp FROM messages ORDER BY timestamp DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Messages Dashboard</title>
  <!-- Logon E kompanis -->
  <link rel="shortcut icon" href="Eli.png" type="image/x-icon">
  <style>
   body {
  font-family: Arial, sans-serif;
  background-color: #f7f7f7;
  margin: 0;
  padding: 0;
  display: flex;
  flex-direction: row;
  height: 100vh;
}

.main-content {
  margin-left: 260px; /* Keep the sidebar space */
  padding: 20px;
  width: calc(100% - 260px);
  background-image: url('https://www.marthastewart.com/thmb/g9E__BeO6H6M2aiNAvfWnKkYVTU=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/spring-cleaning-checklist-lead-getty-0323-2000-f41cb717819a4e858fb5188434f34f13.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  color: #333;
}


.sidebar {
  width: 240px;
  background-color: #2c3e50; /* Dark blue-gray for a professional feel */
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
}

.sidebar h2 {
    font-size: 24px;
  font-weight: 600;
  text-transform: uppercase;
  text-align: center;
  margin-bottom: 40px;
  letter-spacing: 1px;
  color: #ffffff;
}

.sidebar-links {
  list-style-type: none;
  padding: 0;
  flex-grow: 1; /* Allow the links to take up available space */
  display: flex;
  flex-direction: column;
  justify-content: center; /* Center the links vertically */
}

.sidebar-links li {
  margin: 20px 0;
  text-align: center; /* Center the text in the list item */
}

.sidebar-links a {
  text-decoration: none;
  color: #ecf0f1; /* Light gray text */
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

/* Centering the "Go Back" link */
.go-back {
  margin-top: auto; /* Push it to the bottom */
  text-align: center; /* Center the text */
  padding: 20px 0; /* Add some vertical padding */
}

    h2 {
      text-align: center;
      color: #333;
      font-size: 2em;
      margin-bottom: 30px;
    }

    .message-list {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .message-list {
  display: flex;
  flex-direction: column;
  align-items: center; /* Center the messages horizontally */
  justify-content: flex-start;
  padding: 0;
  margin: 0;
}

.message-item {
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: flex-start;
  background-color: #ffffff;
  border-radius: 10px;
  padding: 15px;
  margin-bottom: 15px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease-in-out;
  max-width: 80%; /* Ensures it's not too wide */
  width: 100%;
  margin-right: 10px;
}

.message-item:hover {
  background-color: #f9f9f9;
  transform: translateY(-5px); /* Adds a smooth lift effect on hover */
}

.message-content {
  font-size: 1em;
  color: #333;
  margin-bottom: 10px;
  line-height: 1.5;
}

.timestamp {
  color: #4A90E2;
  font-weight: bold;
  font-size: 0.9em;
  margin-bottom: 10px;
}

.delete-btn {
  background-color: #e74c3c;
  color: white;
  border: none;
  padding: 5px 15px;
  border-radius: 5px;
  cursor: pointer;
  font-size: 0.9em;
  transition: background-color 0.3s ease;
}

.delete-btn:hover {
  background-color: #c0392b;
  transform: scale(1.1); /* Slight scaling effect on hover */
}

/* Responsive styling to make sure it's not too large on smaller screens */
@media screen and (max-width: 768px) {
  .message-item {
    max-width: 100%;
    margin-right: 0;
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
    <li><a href="dashboard.php" class="go-back">Retourner</a></li>
  </ul>
</div>

  <!-- Main Content -->
  <div class="main-content">
    <h2>Messages</h2>

    <ul class="message-list">
      <?php while ($row = $result->fetch_assoc()) : ?>
        <li class="message-item">
          <div class="message-content">
            <strong class="timestamp"><?php echo $row['timestamp']; ?>:</strong>
            <p><?php echo htmlspecialchars($row['message_content']); ?></p>
          </div>
          <div>
            <a href="?delete=<?php echo $row['id']; ?>" class="delete-btn">Delete</a>
          </div>
        </li>
      <?php endwhile; ?>
    </ul>

  </div>

</body>
</html>

<?php
$conn->close();
?>
