
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitZone Fitness Center</title>
    <link rel="stylesheet" href="Fitzone.css">
    <?php
session_start();
include 'db.php';
?>

</head>
<body>

<header>
    <nav class="navbar">
        <div class="logo">FitZone Fitness</div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#membership">Membership</a></li>
            <li><a href="#contact">Contact Us</a></li>
            <li>
                <form action="search.php" method="GET">
                    <input type="text" name="query" placeholder="Search..." required>
                    <button type="submit">🔍</button>
                </form>
            </li>

            <?php if (isset($_SESSION['user_id'])): ?>
                <li><a href="logout.php">Logout</a></li>
            <?php else: ?>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
            <?php endif; ?>
        </ul>
        <button class="hamburger" id="hamburger">&#9776;</button>
    </nav>
</header>

<section id="home" class="hero">
    <div class="hero-overlay">
        <h1>Welcome to FitZone Fitness Center</h1>
        <p>Your Journey to a Healthier Lifestyle Begins Here!</p>
        <button class="cta-button" onclick="location.href='register.php'">Join Us Today</button>
    </div>
</section>

<section id="slider" class="slider">
    <div class="slide" style="background-image: url('images/slide1.jpg');"></div>
    <div class="slide" style="background-image: url('https://img.freepik.com/free-photo/lot-jars-with-vitamin-supplements-shelf-supermarket_587448-8161.jpg');"></div>
    <div class="slide" style="background-image: url('https://www.shutterstock.com/image-photo/happy-athletic-couple-flexing-their-260nw-2325600713.jpg');"></div>
</section>

<section id="about">
    <h1>About FitZone</h1>
    <p>FitZone is your gateway to fitness excellence. Discover our world-class equipment and expert trainers!</p>
</section>

<section id="services">
    <h1>Our Services</h1>
    <p>Personal Training | Group Classes | Nutrition Counseling</p>
</section>

<section id="membership" class="membership-section">
    <h2>Membership Plans</h2>
    <p>Choose the plan that suits your fitness goals.</p>

    <div class="membership-container">
        <div class="membership-card">
            <h3>Basic Plan</h3>
            <p class="price">$20/month</p>
            <ul>
                <li>Access to gym equipment</li>
                <li>Locker room access</li>
                <li>1 Free Personal Training Session</li>
            </ul>
            <button class="join-btn">Join Now</button>
        </div>

        <div class="membership-card featured">
            <h3>Premium Plan</h3>
            <p class="price">$40/month</p>
            <ul>
                <li>All Basic Plan Benefits</li>
                <li>Unlimited Group Classes</li>
                <li>Sauna & Steam Room Access</li>
                <li>Discount on Supplements</li>
            </ul>
            <button class="join-btn">Join Now</button>
        </div>

        <div class="membership-card">
            <h3>Elite Plan</h3>
            <p class="price">$60/month</p>
            <ul>
                <li>All Premium Plan Benefits</li>
                <li>Personal Trainer (4 sessions/month)</li>
                <li>Nutrition Consultation</li>
                <li>Priority Booking for Classes</li>
            </ul>
            <button class="join-btn">Join Now</button>
        </div>
    </div>

    <p class="promo">Limited Offer: Get 10% off on the first 3 months! 🎉</p>
</section>

<section id="contact">
    <h1>Contact Us</h1>
    <p>Email: contact@fitzone.com | Phone: 0756026469</p>
</section>

<footer>
    <p>&copy; 2025 FitZone Fitness Center. All rights reserved.</p>
</footer>

<script src="Fitzone.js"></script>

</body>
</html>
