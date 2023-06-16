<!-- submit_form.php -->
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
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $dob = $_POST["dob"];
    $address = $_POST["address"];

    // Prepare and execute the SQL INSERT statement
    $sql = "INSERT INTO users (name, phone, dob, address)
            VALUES ('$name', '$phone', '$dob', '$address')";

    if ($conn->query($sql) === TRUE) {
        echo "Data stored successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
