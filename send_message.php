<?php
// Include the existing database connection file
include_once 'db_connection.php';  // Adjust the path if needed

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

