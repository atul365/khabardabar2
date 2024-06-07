<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = 'localhost';
$db = 'khabardabar';
$user = 'root';
$pass = '';
$mysqli = new mysqli($host, $user, $pass, $db);


if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $date = trim($_POST['date']);
    $time = trim($_POST['time']);

    if (empty($name) || empty($email) || empty($date) || empty($time)) {
        echo "Please fill up the form first.";
        exit;
    }

    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

    // Validate date and time format
    $dateObj = DateTime::createFromFormat('Y-m-d', $date);
    if ($dateObj === false) {
        echo "Invalid date format. Use YYYY-MM-DD.";
        exit;
    }

    $timeObj = DateTime::createFromFormat('H:i', $time);
    if ($timeObj === false) {
        echo "Invalid time format. Use HH:MM.";
        exit;
    }

    // Check if the date and time are already booked
    $query = "SELECT * FROM reservation WHERE date = ? AND time = ?";
    $stmt = $mysqli->prepare($query);

    if ($stmt) {
        $stmt->bind_param('ss', $date, $time);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo "The date and time is already booked.";
            header("Location: reservation.php?reservation=success");
            $stmt->close();
            $mysqli->close();
            exit;
        }
        $stmt->close();
    } else {
        echo "Database query failed: " . $mysqli->error;
        $mysqli->close();
        exit;
    }

    // Insert the reservation into the database
    $query = "INSERT INTO reservation (name, email, date, time) VALUES (?, ?, ?, ?)";
    $stmt = $mysqli->prepare($query);

    if ($stmt) {
        $stmt->bind_param('ssss', $name, $email, $date, $time);

        if ($stmt->execute()) {
            echo "Your reservation is complete.";
            header("Location: reservation.php?reservation=success");
            exit;
        } else {
            echo "There was an error in making the reservation. Please try again.";
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Database query failed: " . $mysqli->error;
    }
}

$mysqli->close();
?>
