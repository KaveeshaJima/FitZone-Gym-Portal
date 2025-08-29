<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - FitZone</title>
    <link rel="stylesheet" href="Fitzone.css">
</head>
<body>

<div class="auth-container">
    <h2>Login</h2>
    <form action="login.php" method="POST">
        <input type="email" name="email" placeholder="Email Address" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
</div>

<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!$conn) {
        echo "<div class='message'>Database connection failed.</div>";
    } else {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $stmt = $conn->prepare("SELECT id, name, password, role FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
        
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $name, $hashed_password, $role);
            $stmt->fetch();

            if (password_verify($password, $hashed_password)) {
                $_SESSION['user_id'] = $id;
                $_SESSION['user_name'] = $name;
                $_SESSION['user_role'] = $role;

                // Redirect based on role
                if ($role === 'admin') {
                    header("Location: admin_dashboard.php");
                } elseif ($role === 'manager') {
                    header("Location: manager_dashboard.php");
                } else {
                    header("Location: customer_dashboard.php");
                }
                exit;
            } else {
                echo "<div class='message'>Invalid password.</div>";
            }
        } else {
            echo "<div class='message'>No user found with that email.</div>";
        }
    }
}
?>

</body>
</html>
