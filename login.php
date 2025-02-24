<?php
session_start();
include 'db_connection.php'; // Include your database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $enteredUsername = $_POST["username"];
    $enteredPassword = $_POST["password"];

    // Fetch the hashed password from the database
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $enteredUsername);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $storedHashedPassword = $row["password"];

        // Verify entered password with stored hashed password
        if (password_verify($enteredPassword, $storedHashedPassword)) {
            // Password is correct, start session
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["username"] = $enteredUsername;
            header("Location: dashboard.php"); // Redirect to dashboard
            exit();
        } else {
            echo "Invalid username or password.";
        }
    } else {
        echo "Invalid username or password.";
    }

    $stmt->close();
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="mexhide.png" type="image/x-icon">
    <title>Login</title>
    <style>
body {
    font-family: 'Poppins', sans-serif;
    background-color: #f0f2f5;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.login-container {
    background: #fff;
    padding: 40px;
    border-radius: 15px;
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 380px;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.login-container:hover {
    transform: translateY(-5px);
    box-shadow: 0 25px 60px rgba(0, 0, 0, 0.15);
}

.login-container h2 {
    font-size: 28px;
    margin-bottom: 20px;
    color: #2c3e50;
    font-weight: 600;
}

input {
    width: 100%;
    padding: 15px;
    margin: 12px 0;
    border: 1px solid #ccc;
    border-radius: 8px;
    font-size: 16px;
    background-color: #ecf0f1;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

input:focus {
    border-color: #3498db;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(52, 152, 219, 0.2);
    outline: none;
}

button {
    width: 100%;
    padding: 15px;
    background-color: #3498db;
    color: white;
    font-size: 16px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

button:hover {
    background-color: #2980b9;
    transform: translateY(-2px);
}

button:active {
    transform: translateY(1px);
}

.forgot-password {
    font-size: 14px;
    color: #3498db;
    margin-top: 12px;
    text-decoration: none;
    display: block;
    transition: color 0.3s ease;
}

.forgot-password:hover {
    color: #2980b9;
}

.error {
    color: #e74c3c;
    font-size: 14px;
    margin-top: 15px;
    text-align: center;
}

@media (max-width: 768px) {
    .login-container {
        padding: 30px;
    }

    .login-container h2 {
        font-size: 24px;
    }

    input, button {
        font-size: 14px;
    }
}

    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <?php if (isset($_GET['error'])): ?>
            <p class="error"><?php echo htmlspecialchars($_GET['error']); ?></p>
        <?php endif; ?>
        <form action="authenticate.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
