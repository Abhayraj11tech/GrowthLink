<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "growthlink";

    // $conn = new mysqli($servername, $username, $password, $dbname);

    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }

    $name = isset($_POST['name']) ? trim(htmlspecialchars($_POST['name'])) : "";
    $email = isset($_POST['email']) ? trim(htmlspecialchars($_POST['email'])) : "";
    $message = isset($_POST['message']) ? trim(htmlspecialchars($_POST['message'])) : "";

    // $sql = "INSERT INTO contact (name, email, message) VALUES (?, ?, ?)";
    // $stmt = $conn->prepare($sql);
    // $stmt->bind_param("sss", $name, $email, $message);

    // if ($stmt->execute()) {
        header("Location: index.html?msg=success");
        // exit;
    // } else {
        // echo "Error: " . $stmt->error;
    // }

    // $stmt->close();
    // $conn->close();

} else {
    echo "Please submit the form.";
}
?>
