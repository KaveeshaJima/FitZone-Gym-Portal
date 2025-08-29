<?php
session_start();
if (!isset($_SESSION['user_id']) || !in_array($_SESSION['user_role'], ['admin', 'manager'])) {
    header("Location: login.php");
    exit;
}

include 'db.php';

// Handle user deletion
if (isset($_GET['delete'])) {
    $user_id = intval($_GET['delete']);
    $conn->query("DELETE FROM users WHERE id = $user_id");
    header("Location: manage_users.php");
    exit;
}

// Fetch all users
$result = $conn->query("SELECT id, name, email, role FROM users ORDER BY role, name");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Users - Admin</title>
    <link rel="stylesheet" href="Fitzone.css">
    <style>
        body {
            background-color: #f3f6fa;
            font-family: 'Segoe UI', sans-serif;
            padding: 40px;
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #2c3e50;
        }

        table {
            width: 90%;
            margin: auto;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 12px 16px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #0077cc;
            color: white;
        }

        tr:hover {
            background-color: #f0f8ff;
        }

        a.button {
            padding: 6px 12px;
            border-radius: 6px;
            text-decoration: none;
            color: white;
            font-size: 14px;
        }

        .edit {
            background-color: #28a745;
        }

        .delete {
            background-color: #dc3545;
        }

        .top-btn {
            text-align: center;
            margin-bottom: 20px;
        }

        .add-btn {
            background-color: #007bff;
            padding: 10px 18px;
            border-radius: 6px;
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h2>👥 Manage Users</h2>

<div class="top-btn">
    <a href="add_user.php" class="add-btn">➕ Add New User</a>
</div>

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($result->num_rows > 0): ?>
            <?php $i = 1; while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= htmlspecialchars($row['name']); ?></td>
                    <td><?= htmlspecialchars($row['email']); ?></td>
                    <td><?= ucfirst($row['role']); ?></td>
                    <td>
                        <a class="button edit" href="edit_user.php?id=<?= $row['id']; ?>">✏️ Edit</a>
                        <a class="button delete" href="manage_users.php?delete=<?= $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this user?');">🗑️ Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr><td colspan="5" style="text-align:center;">No users found.</td></tr>
        <?php endif; ?>
    </tbody>
</table>

</body>
</html>
