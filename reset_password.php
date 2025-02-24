<?php
include 'db_connection.php'; // Ensure this file has the correct DB connection

$new_password = password_hash("newpassword123", PASSWORD_DEFAULT);

$stmt = $conn->prepare("UPDATE users SET password = ? WHERE username = 'admin'");
$stmt->bind_param("s", $new_password);
$stmt->execute();

echo "Password reset successfully!";
?>
