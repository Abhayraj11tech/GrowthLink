<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "growthlink";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $name = isset($_POST['name']) ? trim(htmlspecialchars($_POST['name'])) : "";
    $email = isset($_POST['email']) ? trim(htmlspecialchars($_POST['email'])) : "";
    $message = isset($_POST['message']) ? trim(htmlspecialchars($_POST['message'])) : "";

    $sql = "INSERT INTO contact (name, email, message) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $message);

    if ($stmt->execute()) {
        echo "<script>
        
                    alert('Message conveyed, Thank you!'); 
                    window.location.href='home.html';

            </script>";
    } else {
        echo "<script>alert('Error: " . $stmt->error . "');</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
