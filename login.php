<!-- login.php -->
<?php
$servername = "localhost";
$username = "admin";
$password = "password";
$dbname = "my_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Verify login credentials
    // Perform necessary validation and authentication checks here

    // Assuming the login is successful
    if ($username == "admin" && $password == "password") {
        // Redirect to the application form
        header("Location: application_form.php");
        exit;
    } else {
        echo "Invalid username or password.";
    }
}

$conn->close();
?>
