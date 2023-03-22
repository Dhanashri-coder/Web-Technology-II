<?php
session_start();
if(isset($_POST['submit1'])){
    $_SESSION['eno']=$_POST['eno'];
    $_SESSION['ename']=$_POST['ename'];
    $_SESSION['address']=$_POST['address'];
    header('location: page2.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Employee Details</title>
</head>
<body>
    <form method="POST" action="">
        <label>Employee Number:</label>
        <input type="text" name="eno" required><br><br>
        <label>Employee Name:</label>
        <input type="text" name="ename" required><br><br>
        <label>Address:</label>
        <input type="text" name="address" required><br><br>
        <input type="submit" name="submit1" value="Submit">
    </form>
</body>
</html>
