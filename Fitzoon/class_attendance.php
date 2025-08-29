<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Class Attendance</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: #f7f9fc;
            font-family: 'Segoe UI', sans-serif;
        }

        .container {
            max-width: 900px;
            margin: 50px auto;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 25px;
        }

        .class-info {
            text-align: center;
            margin-bottom: 20px;
            font-size: 16px;
            color: #555;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th, td {
            padding: 14px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f4f4f4;
        }

        input[type="checkbox"] {
            transform: scale(1.3);
            cursor: pointer;
        }

        .submit-btn {
            margin-top: 25px;
            display: block;
            width: 100%;
            padding: 12px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: #218838;
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #007bff;
            text-decoration: none;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Class Attendance - Full Body Workout</h2>

    <div class="class-info">
        <p><strong>Date:</strong> April 12, 2025 | <strong>Time:</strong> 6:00 PM - 7:00 PM | <strong>Trainer:</strong> Mr. Tharindu</p>
    </div>

    <form onsubmit="alert('Attendance submitted! (Demo only)'); return false;">
        <table>
            <thead>
                <tr>
                    <th>Member Name</th>
                    <th>Member ID</th>
                    <th>Present</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Dinithi Fernando</td>
                    <td>FIT101</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td>Sahan Jayasuriya</td>
                    <td>FIT102</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td>Thilina Ranatunga</td>
                    <td>FIT103</td>
                    <td><input type="checkbox"></td>
                </tr>
            </tbody>
        </table>

        <button type="submit" class="submit-btn">Submit Attendance</button>
    </form>

    <a href="#" class="back-link">← Back to Dashboard</a>
</div>

</body>
</html>
