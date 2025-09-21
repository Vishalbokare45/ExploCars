<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webtechcp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare a select statement
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    // Verify the password
    if ($user && password_verify($password, $user['password'])) {
        // Login successful
        $_SESSION['username'] = $username;
        $_SESSION['profile_image'] = $user['profile_image'];
        header("Location: index.php"); // Redirect to a success page
        exit;
    } else {
        // If the loop completes without finding a match, show an error message
        echo "<script>alert('Invalid credentials!')</script>";
    }

    $stmt->close();
}

$conn->close();
?>
