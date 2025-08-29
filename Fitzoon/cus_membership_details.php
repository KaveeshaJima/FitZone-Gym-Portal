<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Membership Details</title>
  <link rel="stylesheet" href="Fitzone.css" />
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f2f6fc;
      margin: 0;
      padding: 40px;
    }

    .container {
      max-width: 700px;
      margin: auto;
      background-color: #ffffff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      color: #007bff;
      margin-bottom: 25px;
    }

    .details {
      margin-bottom: 30px;
    }

    .details p {
      font-size: 16px;
      margin: 10px 0;
      color: #333;
    }

    .details strong {
      color: #444;
    }

    .renew-btn {
      display: block;
      width: 100%;
      padding: 12px;
      background-color: #28a745;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .renew-btn:hover {
      background-color: #218838;
    }

    .back-link {
      display: block;
      text-align: center;
      margin-top: 20px;
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
  <h2>📋 Membership Details</h2>

  <div class="details">
    <p><strong>Member Name:</strong> Dinithi Fernando</p>
    <p><strong>Membership ID:</strong> FIT101</p>
    <p><strong>Membership Type:</strong> Gold Plan</p>
    <p><strong>Start Date:</strong> January 15, 2025</p>
    <p><strong>End Date:</strong> April 15, 2025</p>
    <p><strong>Status:</strong> <span style="color: red;">Expired</span></p>
  </div>

  <button class="renew-btn">🔁 Renew Membership</button>

  <a href="customer_dashboard.php" class="back-link">← Back to Dashboard</a>
</div>

</body>
</html>
