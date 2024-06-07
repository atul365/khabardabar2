<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contact.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <title>Contact Us - Khabardabar Restaurant</title>
</head>
<body>
    <div id="wrapp">
        <header>
            <nav>
                <div class="container">
                    <h1>Khabardabar Restaurant</h1>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="menu.php">Menu</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <?php if(isset($_SESSION['username'])): ?>
                            <li><a href="reservation.php">Reservation</a></li>
                            <li><a href="logout.php">Logout</a></li>
                            <li><a href="admin.php">Admin</a></li>
                        <?php else: ?>
                            <li><a href="login.php">Login</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </nav>
        </header>
        <div id="contact" class="form">
            <h2 style="color:aliceblue">Contact Us</h2>
            <form class="item" action="contact_us.inc.php" method="post">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Your Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
                <button type="submit">Submit</button>
            </form>
        </div>
        <footer>
            <div class="container">
                <p>&copy; Khabardabar Restaurant. All rights reserved.</p>
            </div>
        </footer>
    </div>
    <script>
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.has('success')) {
            alert('Your message is delivered');
        }
    </script>
</body>
</html>
