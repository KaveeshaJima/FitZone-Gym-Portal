<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['user_role'] !== 'customer') {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customer Dashboard - FitZone</title>
    <link rel="stylesheet" href="Fitzone.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f8fc;
            padding: 20px;
        }
        .dashboard-container {
            max-width: 900px;
            margin: auto;
        }
        .dashboard-header {
            text-align: center;
            margin-bottom: 40px;
        }
        .dashboard-header h1 {
            color: #2c3e50;
        }
        .cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .card {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            width: 48%;
        }
        .card h3 {
            color: #0077cc;
            margin-bottom: 10px;
        }
        .card a {
            text-decoration: none;
            color: #333;
        }
        .card a:hover {
            color: #0077cc;
        }
        .logout {
            text-align: center;
            margin-top: 30px;
        }
        .logout a {
            color: red;
            text-decoration: none;
        }
    </style>
</head>
<body>

<div class="dashboard-container">
    <div class="dashboard-header">
        <h1>Welcome, <?php echo $_SESSION['user_name']; ?> 👋</h1>
        <p>This is your Customer Dashboard</p>
    </div>

    <div class="cards">
        <div class="card">
            <h3><a href="cus_view_classes.php">📅 View & Register for Classes</a></h3>
            <p>Browse and sign up for available fitness sessions.</p>
        </div>
        <div class="card">
            <h3><a href="cus_book_training.php">🏋️ Book Personal Training</a></h3>
            <p>Schedule 1-on-1 sessions with certified trainers.</p>
        </div>
        <div class="card">
            <h3><a href="cus_membership_details.php">💳 Membership Details</a></h3>
            <p>Check membership status and renew if needed.</p>
        </div>
        <div class="card">
            <h3><a href="cus_view_blogs.php">📰 Read Blogs</a></h3>
            <p>Explore tips, nutrition guides, and workout ideas.</p>
        </div>
    </div>

    <div class="logout">
        <a href="logout.php">🚪 Logout</a>
    </div>
</div>

</body>
</html>

