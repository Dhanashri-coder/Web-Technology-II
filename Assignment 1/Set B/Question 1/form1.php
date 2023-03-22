<?php
session_start();
if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username == 'user' && $password == 'pass') {
        $_SESSION['username'] = $username;
        header('Location: form2.php');
    } else {
        $_SESSION['count']++;
        if($_SESSION['count'] >= 3) {
            echo "You have exceeded the maximum number of attempts. Please try again later.";
        } else {
            echo "Invalid username or password. Please try again.";
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Form 1</title>
</head>
<body>
    <form method="post" action="">
        <label>Username:</label>
        <input type="text" name="username">
        <br><br>
        <label>Password:</label>
        <input type="password" name="password">
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>