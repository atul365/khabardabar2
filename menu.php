<?php
session_start();
// Database connection details
$servername = "localhost";
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "khabardabar";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}

// Fetch menu items from the database
$sql = "SELECT name, description, price, image_url FROM menu_items";
$result = $conn->query($sql);
$menu_items = [];
if ($result->num_rows > 0) {
    // Store menu items in an array
    while($row = $result->fetch_assoc()) {
        $menu_items[] = $row;
    }
}
$conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu</title>
  <link rel="stylesheet" href="css/menu.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
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

    <div class="menu">
      <div class="heading">
        <h1>Khabardabar Restaurant</h1>
        <h3>&mdash;Menu&mdash;</h3>
      </div>
    </div>

    <div class="product-grid">
      <?php foreach ($menu_items as $item): ?>
        <div class="product-card">
          <img src="<?php echo htmlspecialchars($item['image_url']); ?>" alt="<?php echo htmlspecialchars($item['name']); ?>">
          <div class="product-description">
            <h3><?php echo htmlspecialchars($item['name']); ?></h3>
            <h5 class="price"><?php echo htmlspecialchars($item['price']); ?></h5>
            <p><?php echo htmlspecialchars($item['description']); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <footer>
      <div class="container">
        <p>&copy; Khabardabar Restaurant. All rights reserved.</p>
      </div>
    </footer>
  </div>
</body>
</html>
