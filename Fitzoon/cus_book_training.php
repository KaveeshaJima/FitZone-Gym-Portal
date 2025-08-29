<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Book Personal Training</title>
  <link rel="stylesheet" href="Fitzone.css" />
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f0f4f8;
      margin: 0;
      padding: 40px;
    }

    .container {
      max-width: 750px;
      margin: auto;
      background-color: #fff;
      padding: 35px;
      border-radius: 12px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      color: #007bff;
      margin-bottom: 25px;
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-weight: bold;
      color: #333;
    }

    input, select, textarea {
      width: 100%;
      padding: 12px;
      margin-bottom: 20px;
      border-radius: 6px;
      border: 1px solid #ccc;
      font-size: 15px;
    }

    button {
      background-color: #28a745;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      width: 100%;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #218838;
    }

    .back-link {
      display: block;
      margin-top: 20px;
      text-align: center;
      text-decoration: none;
      color: #007bff;
      font-weight: 500;
    }

    .back-link:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Book Personal Training</h2>
    <form>
      <label for="name">Your Full Name</label>
      <input type="text" id="name" name="name" placeholder="Enter your name" required />

      <label for="trainer">Select Trainer</label>
      <select id="trainer" name="trainer" required>
        <option value="">-- Select Trainer --</option>
        <option value="tharindu">Mr. Tharindu</option>
        <option value="nimesha">Ms. Nimesha</option>
        <option value="jayantha">Mr. Jayantha</option>
      </select>

      <label for="date">Preferred Date</label>
      <input type="date" id="date" name="date" required />

      <label for="time">Preferred Time</label>
      <input type="time" id="time" name="time" required />

      <label for="goals">Your Fitness Goals</label>
      <textarea id="goals" name="goals" rows="4" placeholder="Write briefly about your goals..."></textarea>

      <button type="submit">Book Training Session</button>
    </form>

    <a href="customer_dashboard.php" class="back-link">← Back to Dashboard</a>
  </div>
</body>
</html>
