<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Appointments</title>
    <link rel="stylesheet" href="Fitzone.css">
    <style>
        body {
            background-color: #f4f7fa;
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            padding: 30px;
        }

        .container {
            max-width: 900px;
            margin: auto;
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            padding: 14px 16px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .status {
            font-weight: bold;
            color: #2d3436;
        }

        .back-btn {
            display: inline-block;
            margin-top: 25px;
            text-align: center;
            text-decoration: none;
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border-radius: 6px;
            transition: background-color 0.3s ease;
        }

        .back-btn:hover {
            background-color: #0056b3;
        }

        .action-btn {
            padding: 6px 10px;
            border: none;
            background-color: #28a745;
            color: white;
            border-radius: 4px;
            font-size: 12px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Manage Appointments</h2>
    
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Customer Name</th>
                <th>Date</th>
                <th>Time</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Samantha Perera</td>
                <td>2025-04-15</td>
                <td>10:00 AM</td>
                <td><span class="status">Pending</span></td>
                <td>
                    <button class="action-btn">Approve</button>
                    <button class="action-btn" style="background-color: #dc3545;">Reject</button>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Nimal Jayasuriya</td>
                <td>2025-04-16</td>
                <td>1:00 PM</td>
                <td><span class="status">Confirmed</span></td>
                <td>
                    <button class="action-btn">Complete</button>
                </td>
            </tr>
        </tbody>
    </table>

    <div style="text-align: center;">
        <a href="manager_dashboard.php" class="back-btn">← Back to Dashboard</a>
    </div>
</div>

</body>
</html>
