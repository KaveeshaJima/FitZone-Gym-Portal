<?php
session_start();
if (!isset($_SESSION['user_id']) || !in_array($_SESSION['user_role'], ['admin', 'manager'])) {
    header("Location: login.php");
    exit;
}

include 'db.php';

if (!isset($_GET['id'])) {
    header("Location: manage_users.php");
    exit;
}

$user_id = intval($_GET['id']);
$user = null;

// Get user data
$stmt = $conn->prepare("SELECT name, email, role FROM users WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($name, $email, $role);
if ($stmt->fetch()) {
    $user = ['name' => $name, 'email' => $email, 'role' => $role];
}
$stmt->close();

if (!$user) {
    echo "<p>User not found.</p>";
    exit;
}

// Update logic
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $new_name = trim($_POST['name']);
    $new_email = trim($_POST['email']);
    $new_role = $_POST['role'];

    $update_stmt = $conn->prepare("UPDATE users SET name = ?, email = ?, role = ? WHERE id = ?");
    $update_stmt->bind_param("sssi", $new_name, $new_email, $new_role, $user_id);
    if ($update_stmt->execute()) {
        header("Location: manage_users.php");
        exit;
    } else {
        echo "<p>Failed to update user.</p>";
    }
    $update_stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
    <link rel="stylesheet" href="Fitzone.css">
    <style>
        body {
            background-color: #eef3f7;
            font-family: 'Segoe UI', sans-serif;
            padding: 40px;
        }

        .form-container {
            width: 400px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
            color: #555;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        button {
            margin-top: 25px;
            width: 100%;
            padding: 10px;
            background-color: #0077cc;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        button:hover {
            background-color: #005fa3;
        }

        .back {
            text-align: center;
            margin-top: 15px;
        }

        .back a {
            text-decoration: none;
            color: #0077cc;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Edit User</h2>
    <form method="POST">
        <label for="name">Full Name</label>
        <input type="text" name="name" id="name" value="<?= htmlspecialchars($user['name']); ?>" required>

        <label for="email">Email Address</label>
        <input type="email" name="email" id="email" value="<?= htmlspecialchars($user['email']); ?>" required>

        <label for="role">User Role</label>
        <select name="role" id="role" required>
            <option value="admin" <?= $user['role'] == 'admin' ? 'selected' : '' ?>>Admin</option>
            <option value="manager" <?= $user['role'] == 'manager' ? 'selected' : '' ?>>Manager</option>
            <option value="customer" <?= $user['role'] == 'customer' ? 'selected' : '' ?>>Customer</option>
        </select>

        <button type="submit">Update User</button>
    </form>
    <div class="back">
        <a href="manage_users.php">← Back to Manage Users</a>
    </div>
</div>

</body>
</html>
