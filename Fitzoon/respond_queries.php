<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Respond to Queries</title>
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

        .query-box {
            background-color: #ecf0f1;
            padding: 20px;
            margin-bottom: 25px;
            border-radius: 10px;
        }

        .query-box h4 {
            margin: 0;
            color: #007bff;
        }

        .query-box p {
            margin: 8px 0 15px;
        }

        .response-form textarea {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 14px;
            resize: vertical;
        }

        .response-form button {
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .response-form button:hover {
            background-color: #218838;
        }

        .back-btn {
            display: inline-block;
            margin-top: 20px;
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
    </style>
</head>
<body>

<div class="container">
    <h2>Respond to Customer Queries</h2>

    <div class="query-box">
        <h4>From: jayantha@gmail.com</h4>
        <p><strong>Query:</strong> Can I freeze my membership for one month?</p>

        <form class="response-form">
            <textarea rows="4" placeholder="Type your response here..."></textarea>
            <button type="submit">Send Response</button>
        </form>
    </div>

    <div class="query-box">
        <h4>From: nimesha@fitmail.com</h4>
        <p><strong>Query:</strong> Do you offer group yoga classes in the evening?</p>

        <form class="response-form">
            <textarea rows="4" placeholder="Type your response here..."></textarea>
            <button type="submit">Send Response</button>
        </form>
    </div>

    <div style="text-align: center;">
        <a href="manager_dashboard.php" class="back-btn">← Back to Dashboard</a>
    </div>
</div>

</body>
</html>
