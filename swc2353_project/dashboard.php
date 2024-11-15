<?php
session_start(); // Ensure the session is started
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Olympus Gym</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
</head>
<body>

<header class="header">
    <div class="nav__header">
        <div class="nav__logo">
            <a href="index.html"><img src="assets/logo.png" alt="logo" width="150" height="154" />OLYMPUS STRENGTH GYM</a>
        </div>
        <ul class="nav__links">
            <li class="link"><a href="index.html">Home</a></li>
            <li class="link"><a href="about.html">About</a></li>
            <li class="link"><a href="classes.html">Classes</a></li>
            <li class="link"><a href="trainers.html">Trainers</a></li>
            <li class="link"><a href="pricing.html">Pricing</a></li>
            <li class="link"><a href="contact.html">Contact Us</a></li>
        </ul>
    </div>
</header>

<div class="section__container dashboard-container">
    <h1>Welcome to Your Dashboard!</h1>
    <p class="welcome-message">
        Hello, <?php echo isset($_SESSION['email']) ? htmlspecialchars($_SESSION['email']) : 'Guest'; ?>! You are now logged in.
    </p>

    <div class="dashboard-buttons">
        <button class="btn" onclick="window.location.href='classes.html'">View Classes</button>
        <button class="btn" onclick="window.location.href='pricing.html'">Membership Plans</button>
        <button class="btn" onclick="window.location.href='contact.html'">Contact Us</button>
        <button class="btn" onclick="window.location.href='logout.php'">Log Out</button>
        <button class="btn" onclick="window.location.href='index.html'">Home</button> <!-- Home button added -->
    </div>
</div>

<footer class="footer">
    <div class="footer__container">
        <p>&copy; 2023 Olympus Strength Gym. All rights reserved.</p>
    </div>
</footer>

</body>
</html><?php
session_start(); // Ensure the session is started
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Olympus Gym</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
    <style>
        /* Additional styles for buttons */
        .btn {
            background-color: #767BE3; /* Button background color */
            color: #fff; /* Text color */
            padding: 0.75rem 1.5rem; /* Padding for the button */
            border: none; /* No border */
            border-radius: 5px; /* Rounded corners */
            font-weight: bold; /* Bold text */
            text-decoration: none; /* No underline */
            cursor: pointer; /* Pointer cursor on hover */
            transition: background-color 0.3s ease, transform 0.3s ease; /* Transition effects */
            margin: 0.5rem; /* Margin for spacing */
        }

        .btn:hover {
            background-color: #6E56B3; /* Darker shade on hover */
            transform: scale(1.05); /* Slightly enlarge on hover */
        }

        .dashboard-container {
            text-align: center; /* Center align text in dashboard */
        }
    </style>
</head>
<body>

<header class="header">
    <div class="nav__header">
        <div class="nav__logo">
            <a href="index.html"><img src="assets/logo.png" alt="logo" width="150" height="154" />OLYMPUS STRENGTH GYM</a>
        </div>
        <ul class="nav__links">
            <li class="link"><a href="index.html">Home</a></li>
            <li class="link"><a href="about.html">About</a></li>
            <li class="link"><a href="classes.html">Classes</a></li>
            <li class="link"><a href="trainers.html">Trainers</a></li>
            <li class="link"><a href="pricing.html">Pricing</a></li>
            <li class="link"><a href="contact.html">Contact Us</a></li>
        </ul>
    </div>
</header>

<div class="section__container dashboard-container">
    <h1>Welcome to Your Dashboard!</h1>
    <p class="welcome-message">
        Hello, <?php echo isset($_SESSION['email']) ? htmlspecialchars($_SESSION['email']) : 'Guest'; ?>! You are now logged in.
    </p>

    <div class="dashboard-buttons">
        <button class="btn" onclick="window.location.href='classes.html'">View Classes</button>
        <button class="btn" onclick="window.location.href='pricing.html'">Membership Plans</button>
        <button class="btn" onclick="window.location.href='contact.html'">Contact Us</button>
        <button class="btn" onclick="window.location.href='logout.php'">Log Out</button>
        <button class="btn" onclick="window.location.href='index.html'">Home</button> <!-- Home button added -->
    </div>
</div>

<footer class="footer">
    <div class="footer__container">
        <p>&copy; 2023 Olympus Strength Gym. All rights reserved.</p>
    </div>
</footer>

</body>
</html><?php
session_start(); // Ensure the session is started
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Olympus Gym</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
    <style>
        /* Additional styles for buttons */
        .btn {
            background-color: #767BE3; /* Button background color */
            color: #fff; /* Text color */
            padding: 0.75rem 1.5rem; /* Padding for the button */
            border: none; /* No border */
            border-radius: 5px; /* Rounded corners */
            font-weight: bold; /* Bold text */
            text-decoration: none; /* No underline */
            cursor: pointer; /* Pointer cursor on hover */
            transition: background-color 0.3s ease, transform 0.3s ease; /* Transition effects */
            margin: 0.5rem; /* Margin for spacing */
        }

        .btn:hover {
            background-color: #6E56B3; /* Darker shade on hover */
            transform: scale(1.05); /* Slightly enlarge on hover */
        }

        .dashboard-container {
            text-align: center; /* Center align text in dashboard */
        }
    </style>
</head>
<body>

<header class="header">
    <div class="nav__header">
        <div class="nav__logo">
            <a href="index.html"><img src="assets/logo.png" alt="logo" width="150" height="154" />OLYMPUS STRENGTH GYM</a>
        </div>
        <ul class="nav__links">
            <li class="link"><a href="index.html">Home</a></li>
            <li class="link"><a href="about.html">About</a></li>
            <li class="link"><a href="classes.html">Classes</a></li>
            <li class="link"><a href="trainers.html">Trainers</a></li>
            <li class="link"><a href="pricing.html">Pricing</a></li>
            <li class="link"><a href="contact.html">Contact Us</a></li>
        </ul>
    </div>
</header>

<div class="section__container dashboard-container">
    <h1>Welcome to Your Dashboard!</h1>
    <p class="welcome-message">
        Hello, <?php echo isset($_SESSION['email']) ? htmlspecialchars($_SESSION['email']) : 'Guest'; ?>! You are now logged in.
    </p>

    <div class="dashboard-buttons">
        <button class="btn" onclick="window.location.href='classes.html'">View Classes</button>
        <button class="btn" onclick="window.location.href='pricing.html'">Membership Plans</button>
        <button class="btn" onclick="window.location.href='contact.html'">Contact Us</button>
        <button class="btn" onclick="window.location.href='logout.php'">Log Out</button>
        <button class="btn" onclick="window.location.href='index.html'">Home</button> <!-- Home button added -->
    </div>
</div>

<footer class="footer">
    <div class="footer__container">
        <p>&copy; 2023 Olympus Strength Gym. All rights reserved.</p>
    </div>
</footer>

</body>
</html>