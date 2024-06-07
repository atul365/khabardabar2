
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css"> <!-- Link to external CSS file -->
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
                    <li><a href="login.php">Login</a></li>
                    
                    
                        
            
                    
                </ul>
            </div>
        </nav>
    </header>


    <div class="hero">
        <video autoplay muted loop class="background-video">
            <source src="assets/bg-index-vid.mp4" type="video/mp4">*/
            
        </video>
        <div class="login-container">
        <h1>Login</h1>
        <form action="login.inc.php" method="POST">
            <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" name="submit" id="submit" value="Submit">Login</button>
        </form>
        
        <p>Don't have an account? <a href="signup.php">Sign up</a></p>
        <p>Wanna go back? <a href="index.php">Back</a></p>
    </div>
    </div>

    <footer>
        <div class="container">
            <p>&copy; khabardabar restaurant. All rights reserved.</p>
        </div>
    </footer>
</body>






<body>
    <div class="container">
    
    </div>
    <script src="js/menu.js"></script>
</body>
</html>
