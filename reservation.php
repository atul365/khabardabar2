<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("location: login.php");
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Restaurant Reservation</title>
  <link rel="stylesheet" href="css/reservation.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <div>
    <header>
        <nav>
            <div class="container">
                <h1>Khabardabar Restaurant</h1>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="menu.php">Menu</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <?php if (isset($_SESSION['username'])): ?>
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
     
     
    <div id="reservation-form">
        <h2>Reservation Form</h2>
        <form action="RESS.php" method="post" id="reservation">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required>

            <label for="time">Time:</label>
            <input type="time" id="time" name="time" required>

            <button type="submit">Submit Reservation</button>
        </form>
    </div>
    
    <footer>
        <div class="container">
            <p>&copy; Khabardabar Restaurant. All rights reserved.</p>
        </div>
    </footer>
    </div>
</body>
</html>
