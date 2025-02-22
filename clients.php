<?php
$servername = "localhost";
$username = "root"; // Change if needed
$password = ""; // Change if needed
$dbname = "kompani_pastrimi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// ADD CLIENT
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add_client"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $service_requested = $_POST["service_requested"];
    $appointment_date = $_POST["appointment_date"];
    $appointment_time = $_POST["appointment_time"];

    $sql = "INSERT INTO clients (name, email, phone, address, service_requested, appointment_date, appointment_time) 
            VALUES ('$name', '$email', '$phone', '$address', '$service_requested', '$appointment_date', '$appointment_time')";

    if ($conn->query($sql) === TRUE) {
        echo "New client added successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

// DELETE CLIENT
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_client"])) {
    $client_id = $_POST["client_id"];

    $sql = "DELETE FROM clients WHERE id = $client_id";

    if ($conn->query($sql) === TRUE) {
        echo "Client deleted successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

// Fetch all clients
$clients = $conn->query("SELECT * FROM clients");

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients Dashboard</title>
    <!-- Logon E kompanis -->
  <link rel="shortcut icon" href="Eli.png" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
   
        <a href="dashboard.php">Retourner</a>
       
    </div>

    <!-- Content -->
    <div class="content">
        <h2>Add Client</h2>
        <form method="post">
            <input type="text" name="name" placeholder="Full Name" required><br>
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="text" name="phone" placeholder="Phone Number" required><br>
            <input type="text" name="address" placeholder="Address" required><br>
            <input type="text" name="service_requested" placeholder="Service Requested" required><br>
            <input type="date" name="appointment_date" required><br>
            <input type="time" name="appointment_time" required><br>
            <button type="submit" name="add_client">Add Client</button>
        </form>

        <h2>Clients List</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Service</th>
                <th>Date</th>
                <th>Time</th>
                <th>Action</th>
            </tr>
            <?php while ($row = $clients->fetch_assoc()) { ?>
            <tr>
                <td><?= $row["id"] ?></td>
                <td><?= $row["name"] ?></td>
                <td><?= $row["email"] ?></td>
                <td><?= $row["phone"] ?></td>
                <td><?= $row["address"] ?></td>
                <td><?= $row["service_requested"] ?></td>
                <td><?= $row["appointment_date"] ?></td>
                <td><?= $row["appointment_time"] ?></td>
                <td>
                    <form method="post">
                        <input type="hidden" name="client_id" value="<?= $row['id'] ?>">
                        <button type="submit" name="delete_client">Delete</button>
                    </form>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
   
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background-color:#2c3e50; /* Light neutral background */
  color: #333333;
  line-height: 1.6;
  display: flex;
  min-height: 100vh;
  flex-direction: column;
}


.container {
    width: 100%;
    max-width: 1100px;
    background-color: rgba(255, 255, 255, 0.8); /* Slight opacity for better contrast */
    padding: 40px 50px;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    gap: 25px;
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
}

.sidebar a {
    color: white;
    text-decoration: none;
    font-size: 18px;
    margin: 10px 0;
    display: block;
}

.sidebar a:hover {
    color: #3498db;
}

.sidebar button {
    margin-top: 20px;
    background-color: #2980b9;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
}

.sidebar button:hover {
    background-color: #3498db;
}

.content {
    margin-left: 280px;  /* Offset for the sidebar */
    padding: 20px;
    flex-grow: 1;
}

h2 {
    font-size: 24px;
    color: #2c3e50;
    font-weight: 600;
}

form {
    background-color: #fff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    gap: 20px;
}

input, button {
    padding: 14px;
    border-radius: 6px;
    font-size: 16px;
    border: 1px solid #ccc;
    outline: none;
    transition: all 0.3s ease;
}

input:focus, button:focus {
    border-color: #2980b9;
    box-shadow: 0 0 5px rgba(41, 128, 185, 0.5);
}

input {
    background-color: #f8f9fa;
}

button {
    background-color: #2980b9;
    color: white;
    cursor: pointer;
    font-weight: 600;
    border: none;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #3498db;
}

button:active {
    background-color: #2980b9;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 40px;
}

table th, table td {
    padding: 14px;
    text-align: left;
    border: 1px solid #e1e1e1;
    font-size: 16px;
}

table th {
    background-color: #2980b9;
    color: white;
    font-weight: 600;
    text-transform: uppercase;
}

table td {
    background-color: #fff;
    color: #333;
}

table tr:nth-child(even) td {
    background-color: #f9f9f9;
}

table tr:hover td {
    background-color: #f1f1f1;
    transition: background-color 0.3s ease;
}

footer {
    text-align: center;
    padding: 20px;
    background-color: #34495e;
    color: white;
    border-radius: 8px;
    margin-top: 30px;
    font-size: 16px;
}
</style>
