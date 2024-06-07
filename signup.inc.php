<?php
if(isset($_POST['submit'])) {
    // Fetch user input
    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    require_once "dbh.inc.php";
    error_log($password, 0) ;
    if (empty($first) || empty($last) || empty($email) || empty($username) || empty($password)) {
        header('location: ../signup.php?error=empty_input');
        exit();
    } else {
        // Validate input data
        if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
            header("location: ../signup.php?signup=invalid");
            exit();
        } else {
            // Validate email format
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("location: ../signup.php?signup=emailerror");
                exit();
            } else {
                // Check if username already exists
                $sql = "SELECT * FROM signup WHERE username='$username'";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if($resultCheck > 0) {
                    header("location: ../signup.php?signup=usertaken");
                    exit();
                } else {
                    // Hash password
                    $hashedpass = password_hash($password, PASSWORD_DEFAULT);
                    error_log($hashedpass, 0) ;
                    // Insert user into database
                    $sql = "INSERT INTO signup (`First`, `Last`, `Email`, `username`, `password`) VALUES ('$first', '$last', '$email', '$username', '$hashedpass')";
                    mysqli_query($conn, $sql);
                    header("location: login.php");
                    exit();
                }
            }
        }
    }
} else {
    header('location: ../signup.php');
    exit();
}
?>
