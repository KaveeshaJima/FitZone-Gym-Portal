<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Update Class Schedule</title>
  <link rel="stylesheet" href="Fitzone.css">
  <style>
    body {
      margin: 0;
      padding: 0;
      background: #f2f4f8;
      font-family: 'Segoe UI', sans-serif;
    }

    .container {
      max-width: 800px;
      margin: 50px auto;
      background: #fff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      color: #2c3e50;
      margin-bottom: 25px;
    }

    form label {
      display: block;
      margin-top: 20px;
      font-weight: 500;
      color: #34495e;
    }

    form input, form select, form textarea {
      width: 100%;
      padding: 10px 12px;
      margin-top: 8px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 15px;
    }

    form textarea {
      resize: vertical;
      min-height: 80px;
    }

    .submit-btn {
      margin-top: 30px;
      width: 100%;
      padding: 12px;
      background-color: #007bff;
      color: #fff;
      font-size: 16px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .submit-btn:hover {
      background-color: #0056b3;
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
  <h2>Update Class Schedule</h2>

  <form>
    <label for="class_name">Class Name:</label>
    <input type="text" id="class_name" name="class_name" placeholder="e.g. Zumba, Cardio Blast" required>

    <label for="trainer">Trainer:</label>
    <input type="text" id="trainer" name="trainer" placeholder="Trainer's Name" required>

    <label for="date">Class Date:</label>
    <input type="date" id="date" name="date" required>

    <label for="time">Time:</label>
    <input type="time" id="time" name="time" required>

    <label for="location">Location / Studio:</label>
    <input type="text" id="location" name="location" placeholder="e.g. Studio A, Rooftop Gym">

    <label for="description">Class Description:</label>
    <textarea id="description" name="description" placeholder="Brief class overview..."></textarea>

    <button type="submit" class="submit-btn">Update Schedule</button>
  </form>

  <a href="manager_dashboard.php" class="back-link">← Back to Manager Dashboard</a>
</div>

</body>
</html>
