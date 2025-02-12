<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "kompani_pastrimi");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the message from the form
    $message = $_POST['message'];

    // Prepare SQL query to insert the message into the database
    $stmt = $conn->prepare("INSERT INTO messages (message_content) VALUES (?)");
    $stmt->bind_param("s", $message);

    if ($stmt->execute()) {
        echo "Message sent successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
