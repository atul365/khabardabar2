<?php
session_start();
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
                    <li><a href="reservation.php">Reservation</a></li>
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
        <h2>The time is already booked. Please insert another time.</h2>
        <button><a href="reservation.php">Reservation</a></button>
    </div>
    <footer>
        <div class="container">
            <p>&copy; Khabardabar Restaurant. All rights reserved.</p>
        </div>
    </footer>
    </div>
    <footer>
    <div class="container">
      <div class="social-icons">
        <a href="https://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-square"></i></a>
        <a href="https://www.instagram.com/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
        <a href="https://twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
        <a href="mailto:your.email@gmail.com" title="Email"><i class="far fa-envelope"></i></a>
      </div>
      <p>&copy; Khabardabar Restaurant. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>
