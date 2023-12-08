<?php
$conn = new mysqli("localhost", "root", "", "newsletter");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];

    $sql = "SELECT username FROM account_tbl WHERE username = '$username'";
    $result = $conn->query($sql);

    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        header("Location: forum.php"); 
        if($username=="admin"){
            header("Location: admin.php");
        }
    } else {
        header("Location: landingpage.php"); 
    }
}

$conn->close();
?>