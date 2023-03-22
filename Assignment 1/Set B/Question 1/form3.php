<?php
session_start();
if(!isset($_SESSION['username'])) {
    header('Location: form1.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form 3</title>
</head>
<body>
    <h1>Actual Implementation</h1>
    <p>This is the actual implementation.</p>
</body>
</html>