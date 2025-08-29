<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Fitness Blogs</title>
  <link rel="stylesheet" href="Fitzone.css" />
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f2f6fc;
      margin: 0;
      padding: 40px;
    }

    .container {
      max-width: 1000px;
      margin: auto;
    }

    h2 {
      text-align: center;
      color: #007bff;
      margin-bottom: 30px;
    }

    .blog-card {
      background-color: #ffffff;
      padding: 25px;
      margin-bottom: 25px;
      border-radius: 12px;
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.08);
      transition: transform 0.2s ease;
    }

    .blog-card:hover {
      transform: translateY(-5px);
    }

    .blog-title {
      font-size: 20px;
      color: #333;
      margin-bottom: 8px;
    }

    .blog-meta {
      font-size: 13px;
      color: #777;
      margin-bottom: 15px;
    }

    .blog-content {
      font-size: 15px;
      color: #444;
    }

    .back-link {
      display: block;
      text-align: center;
      margin-top: 30px;
      color: #007bff;
      text-decoration: none;
      font-weight: bold;
    }

    .back-link:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>📝 Fitness Blogs</h2>

  <div class="blog-card">
    <div class="blog-title">5 High-Protein Breakfasts to Start Your Day Right</div>
    <div class="blog-meta">Posted on April 1, 2025 | By Coach Tharindu</div>
    <div class="blog-content">
      Looking for energy-packed meals to fuel your mornings? These 5 protein-rich breakfast ideas are perfect for fitness enthusiasts...
    </div>
  </div>

  <div class="blog-card">
    <div class="blog-title">The Ultimate Guide to Home Workouts</div>
    <div class="blog-meta">Posted on March 20, 2025 | By Dinithi</div>
    <div class="blog-content">
      Can't make it to the gym? No worries! Here's how you can stay in shape with minimal equipment right at home...
    </div>
  </div>

  <div class="blog-card">
    <div class="blog-title">Top 10 Pre-Workout Snacks</div>
    <div class="blog-meta">Posted on March 10, 2025 | By Nutrition Team</div>
    <div class="blog-content">
      Want to boost your performance and endurance? These quick snacks are perfect before hitting your next session...
    </div>
  </div>

  <a href="customer_dashboard.php" class="back-link">← Back to Dashboard</a>
</div>

</body>
</html>
