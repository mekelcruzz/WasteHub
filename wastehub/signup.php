<?php
$conn = new mysqli("localhost", "root", "", "newsletter");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];

    $sql = "INSERT INTO account_tbl (username, email) VALUES ('$username','$email')";

    if ($conn->query($sql) === TRUE) {
        header("Location: landingpage.php"); 
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>