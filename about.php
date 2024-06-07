<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/about.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <title>About</title>
</head>
<body class="wrap">
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
<div>
    <h2 class="headline">About Us</h2>
    <p class="para">Khabardabar Restaurant, established on January 6, 2024, in the heart of Chittagong, quickly became a local favorite by blending traditional South Asian flavors with a contemporary dining experience. Founded by Atul and Wahid, the restaurant offers a menu rich in family recipes and vibrant cultural dishes, aiming to create a community hub where patrons can enjoy authentic cuisine alongside cultural events like music performances and poetry readings. Despite its recent inception, Khabardabar has already garnered a reputation for its warm atmosphere, culinary excellence, and commitment to celebrating and preserving cultural heritage.</p>
</div>
<div>
    <h2 class="headline">Location</h2>
    <image src="assets/map.jpg" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></image>
</div>
<footer>
    <div class="container">
        <p>&copy; Khabardabar Restaurant. All rights reserved.</p>
    </div>
</footer>
</body>
</html>
