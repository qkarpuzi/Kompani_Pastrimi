<?php
// Include the existing database connection file
include_once 'db_connection.php';  // Make sure the path to db_connection.php is correct

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];
    
    // File upload handling
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $upload_ok = 1;
    $image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
    // Check if file is an actual image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check === false) {
        echo "File is not an image.";
        $upload_ok = 0;
    }
    
    // Check file size (5MB limit)
    if ($_FILES["image"]["size"] > 5000000) {
        echo "File is too large.";
        $upload_ok = 0;
    }
    
    // Allow certain file formats
    if (!in_array($image_file_type, ['jpg', 'png', 'jpeg', 'gif'])) {
        echo "Only JPG, JPEG, PNG, & GIF files are allowed.";
        $upload_ok = 0;
    }
    
    if ($upload_ok == 1) {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $image_url = $target_file;
            $stmt = $conn->prepare("INSERT INTO gallery (title, description, image_url) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $title, $description, $image_url);
            
            if ($stmt->execute()) {
                echo "Image uploaded successfully!";
            } else {
                echo "Error: " . $stmt->error;
            }
        } else {
            echo "Error uploading file.";
        }
    }
}

$conn->close();
?>
