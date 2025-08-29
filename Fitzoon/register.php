<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register - FitZone</title>
    <link rel="stylesheet" href="Fitzone.css">
</head>
<body>

<div class="auth-container">
    <h2>Register</h2>
    <form action="register.php" method="POST" class="auth-form">
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email Address" required>
        <input type="password" name="password" placeholder="Password" required>

        <select name="role" required>
            <option value="customer">Customer</option>
           // You can add manager and admin
        </select>

        <button type="submit">Register</button>
    </form>
</div>

<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!$conn) {
        die("Database connection failed.");
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];

    
    $stmt = $conn->prepare("INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)");

    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }

    
    $stmt->bind_param("ssss", $name, $email, $password, $role);

    if ($stmt->execute()) {
        echo "<div class='message'>Registration successful! You can now <a href='login.php'>Login</a>.</div>";
    } else {
        echo "<div class='message'>Registration failed: " . $stmt->error . "</div>";
    }

    $stmt->close();
    $conn->close();
}
?>

</body>
</html>
