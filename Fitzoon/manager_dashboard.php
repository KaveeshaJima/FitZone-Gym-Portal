<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['user_role'] !== 'manager') {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manager Dashboard - FitZone</title>
    <link rel="stylesheet" href="Fitzone.css">
    <style>
         body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #eef4f9;
            padding: 20px;
        }

        .dashboard-container {
            max-width: 900px;
            margin: auto;
            padding: 30px 0;
        }

        .dashboard-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .dashboard-header h1 {
            color: #2c3e50;
            font-size: 28px;
        }

        .dashboard-header p {
            color: #555;
        }

        .cards {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .card {
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
            padding: 20px 30px;
            transition: all 0.3s ease-in-out;
        }

        .card:hover {
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .card h3 {
            margin-bottom: 8px;
            font-size: 20px;
        }

        .card a {
            text-decoration: none;
            color: #2c3e50;
        }

        .card a:hover {
            color: #0077cc;
        }

        .logout {
            text-align: center;
            margin-top: 30px;
        }

        .logout a {
            color: #d9534f;
            text-decoration: none;
            font-weight: bold;
        }

        .emoji {
            margin-right: 5px;
        }
    </style>
</head>
<body>

<div class="dashboard-container">
    <div class="dashboard-header">
        <h1>Welcome, Manager <?php echo $_SESSION['user_name']; ?> 💼</h1>
        <p>This is your Manager Dashboard</p>
    </div>

    <div class="cards">
        <div class="card">
            <h3><a href="manage_users.php"><span class="emoji">👥</span> Manage Users</a></h3>
            <p>View, edit, or delete customer and staff user accounts.</p>
        </div>
    <div class="cards">
        <div class="card">
            <h3><a href="manage_appointments.php">📆 View Appointments</a></h3>
            <p>Check and manage customer training appointments.</p>
        </div>
        <div class="card">
            <h3><a href="respond_queries.php">💬 Respond to Queries</a></h3>
            <p>View and reply to customer inquiries.</p>
        </div>
        <div class="card">
            <h3><a href="schedule_classes.php">🕒 Update Class Schedule</a></h3>
            <p>Edit or reschedule fitness classes and sessions.</p>
        </div>
    </div>

    <div class="logout">
        <a href="logout.php">🚪 Logout</a>
    </div>
</div>

</body>
</html>
