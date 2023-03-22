<?php
session_start();
if(isset($_POST['submit2'])){
    $_SESSION['basic']=$_POST['basic'];
    $_SESSION['da']=$_POST['da'];
    $_SESSION['hra']=$_POST['hra'];
    header('location: page3.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Earnings</title>
</head>
<body>
    <form method="POST" action="">
        <label>Basic:</label>
        <input type="text" name="basic" required><br><br>
        <label>DA:</label>
        <input type="text" name="da" required><br><br>
        <label>HRA:</label>
        <input type="text" name="hra" required><br><br>
        <input type="submit" name="submit2" value="Submit">
    </form>
</body>
</html>
