<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Khabardabar Restaurant</title>
  <link rel="stylesheet" href="css/index.css"> <!-- Link to external CSS file -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
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

  <div class="hero">
    <video autoplay muted loop class="background-video">
      <source src="assets/bg-index-vid.mp4" type="video/mp4">
    </video>
    <div class="container">
      <h1>Welcome to Khabardabar Restaurant</h1>
      <p>Discover our delicious menu and enjoy the crazy atmosphere.</p>
      <p>Check out our menu and visit us today!</p>
    </div>
  </div>
  <?php if (isset($_SESSION['username'])): ?>
  <div id="menu" class="menu">
    <section>
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Check Out <span>Our Special</span> Dishes</h2>
        </div>
        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
          <div class="tab-pane fade active show" id="menu-starters">
            <div class="row gy-5">
              <div class="col-lg-4 menu-item">
                <a href="menu.php" class="glightbox"><img src="assets/egg_biriyani.jpg" class="menu-img img-fluid" alt=""></a>
                <h4 class="titi" style="color: aliceblue;">Egg biriyani</h4>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="menu.php" class="glightbox"><img src="assets/biriyani2.jpg" class="menu-img img-fluid" alt=""></a>
                <h4 class="titi" style="color: aliceblue;">Chicken biriyani</h4>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="menu.php" class="glightbox"><img src="assets/Pizza1.jpg" class="menu-img img-fluid" alt=""></a>
                <h4 class="titi" style="color: aliceblue;">Cheese pizza</h4>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="menu.php" class="glightbox"><img src="assets/pizza2.jpg" class="menu-img img-fluid" alt=""></a>
                <h4 class="titi" style="color: aliceblue;">Kebab cocktail Pizza</h4>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="menu.php" class="glightbox"><img src="assets/pizza3.jpg" class="menu-img img-fluid" alt=""></a>
                <h4 class="titi" style="color: aliceblue;">Pizza</h4>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="menu.php" class="glightbox"><img src="assets/piecake.jpg" class="menu-img img-fluid" alt=""></a>
                <h4 class="titi" style="color: aliceblue;">Strawbery Piecake</h4>
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="text-center mt-4">
        <a class="btn btn-warning" href="menu.php">Go to Menu</a>
      </div>
    </section>
  </div>
  <?php else: ?>
    <div class="container" style="color:aliceblue;" >
    Please <a class="btn btn-warning" href="login.php"style=>Login</a> to view our full website.
    <br> If you don't have account please <a class="btn btn-warning" href="signup.php">Signup</a> first.
    
    </div>
    <?php endif; ?>



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
  <script src="script.js"></script>
</body>
</html>
