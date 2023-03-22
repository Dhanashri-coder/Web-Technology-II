<?php
session_start();
if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    echo "Welcome $username!";
} else {
    header('Location: form1.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form 2</title>
</head>
<body>
    <h1>Welcome Message</h1>
    <p>This is the welcome message.</p>
</body>
</html>