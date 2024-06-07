<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signup.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <title>Sign up</title>
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
                    <li><a href="login.php">Login</a></li> 
                    <?php

                    if(isset($_SESSION['u_id']))
                    {echo'<li><a href="reservation.php">reservation</a></li> ';}
                        
                    
                
                        
                    
                    ?>
                    
                    
                </ul>
            </div>
        </nav>
    </header>
  
<div class="signup">
    <h1>Sign Up Below</h1>
		<form action="signup.inc.php" method="POST">
			<p>First Name:</p>
			<input type="text" name="first" placeholder="Enter First Name">
			<p>Last Name:</p>
			<input type="text" name="last" placeholder="Enter Last Name">
			<p>Email:</p>
			<input type="email" name="email" placeholder="Enter Email">
			<p>Username:</p>
			<input type="text" name="username" placeholder="Enter Username">
			<p>Password:</p>
			<input type="password" name="password" placeholder="Enter Password">
			<button type="submit" name="submit">Sign Up</button><br><br>
			<a href="#">Lost your password?</a>
			<br>
			<a href="login.php">Already have an account? Login Here!</a>
		</form>
</div>

    </div>

    <footer>
        <div class="container">
            <p>&copy; khabardabar restaurant. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>