<?php
session_start();
require_once 'dbh.inc.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if username and password are correct
    $sql = "SELECT username, password FROM signup WHERE username = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows == 1) {
            $stmt->bind_result($db_username, $db_password);
            $stmt->fetch();

            if (password_verify($password, $db_password)) {
                session_start();
                if(isset( $_SESSION['email']))
                {
                echo"<script>alert('Logout before logging in');
                window.location.href='login.php';
            </script> ";}

                // Password is correct, start a new session
                $_SESSION['username'] = $db_username;
                header("location: index.php");
            } else {
                // Password is incorrect
                echo "Invalid password.";
            }
        } else {
            // Username does not exist
            echo "No account found with that username.";
        }

        $stmt->close();
    }
    $conn->close();
}
?>
