<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["email"])) {
        $userEmail = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);

        if (filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
            $mail->isSMTP();
            $mail->SMTPDebug = 2;
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'mekelcruzz@gmail.com';
            $mail->Password = 'ioum xmmd ozvl qgtx';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom('no-reply@example.com', 'No Reply');
            $mail->addAddress($userEmail);

            $mail->Subject = "WasteHub";
            $mail->Body = "Thank you for subscribing to our newsletter!";

            $mail->send();

            echo "Subscription successful. Thank you!";
        } else {
            echo "Invalid email address. Please try again.";
        }
    } else {
        echo "Invalid request. Please try again.";
    }
} catch (Exception $e) {
    echo "Error sending email. Please try again. Error: {$mail->ErrorInfo}";
}
// Assuming you have a MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newsletter";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

try {
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["email"])) {
        $userEmail = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);

        if (filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
            // Insert email into the database
            $sql = "INSERT INTO subscribers (email) VALUES ('$userEmail')";
            $conn->query($sql);

            // Your existing code for sending the confirmation email goes here

            echo json_encode(["success" => true, "message" => "Subscription successful. Thank you!"]);
        } else {
            echo json_encode(["success" => false, "message" => "Invalid email address. Please try again."]);
        }
    } else {
        echo json_encode(["success" => false, "message" => "Invalid request. Please try again."]);
    }
} catch (Exception $e) {
    echo json_encode(["success" => false, "message" => "Error processing subscription. Please try again."]);
}

// Close the database connection
$conn->close();
?>