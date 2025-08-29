<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>View & Register for Classes</title>
  <link rel="stylesheet" href="Fitzone.css" />
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
      margin-bottom: 25px;
    }

    .class-box {
      background-color: #ecf0f1;
      padding: 20px;
      margin-bottom: 25px;
      border-radius: 10px;
    }

    .class-box h4 {
      margin: 0;
      color: #007bff;
    }

    .class-box p {
      margin: 8px 0 15px;
    }

    .register-btn {
      display: inline-block;
      padding: 10px 20px;
      background-color: #28a745;
      color: white;
      text-decoration: none;
      border-radius: 6px;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }

    .register-btn:hover {
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
  <h2>📅 View & Register for Classes</h2>

  <div class="class-box">
    <h4>💪 HIIT Training</h4>
    <p><strong>Time:</strong> Monday & Wednesday at 6:00 PM</p>
    <p><strong>Instructor:</strong> Sarah Jay</p>
    <a href="#" class="register-btn">Register Now</a>
  </div>

  <div class="class-box">
    <h4>🧘 Evening Yoga</h4>
    <p><strong>Time:</strong> Tuesday & Thursday at 7:30 PM</p>
    <p><strong>Instructor:</strong> Manjula Perera</p>
    <a href="#" class="register-btn">Register Now</a>
  </div>

  <div class="class-box">
    <h4>🚴 Spin Class</h4>
    <p><strong>Time:</strong> Friday at 5:00 PM</p>
    <p><strong>Instructor:</strong> Kasun Fernando</p>
    <a href="#" class="register-btn">Register Now</a>
  </div>

  <div style="text-align: center;">
    <a href="customer_dashboard.php" class="back-btn">← Back to Dashboard</a>
  </div>
</div>

</body>
</html>
