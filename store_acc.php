<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

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

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prepare the new account data
    $newAccount = array(
        "username" => $_POST['username'],
        "email" => $_POST['email'],
        "mobile_no" => $_POST['mobile'],
        "password" => password_hash($_POST['password'], PASSWORD_DEFAULT), // Hash the password
        "profile_image" => "" // Placeholder for the image path or data
    );

    // Handle profile photo upload
    if (isset($_FILES['profileImage']) && $_FILES['profileImage']['error'] == UPLOAD_ERR_OK) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["profileImage"]["name"]);
        move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file);
        $newAccount['profile_image'] = $target_file; // Update the profile_image with the path
    }

    // Prepare an insert statement
    $stmt = $conn->prepare("INSERT INTO users (username, email, mobile_no, password, profile_image) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $newAccount['username'], $newAccount['email'], $newAccount['mobile_no'], $newAccount['password'], $newAccount['profile_image']);

    // Execute the statement
    if ($stmt->execute()) {
        // Redirect to index.php after successful registration
        header("Location: Login.html");
        exit(); // Make sure to exit after redirection
    } else {
        echo "Error storing account, please try again";
        echo "SQL Error: " . $stmt->error; // Display SQL error
    }

    $stmt->close();
}

$conn->close();
?>
