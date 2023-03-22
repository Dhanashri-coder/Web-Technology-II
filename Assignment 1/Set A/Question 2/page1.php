<?php
if(isset($_POST['submit'])) {
    $font_style = $_POST['font_style'];
    $font_size = $_POST['font_size'];
    $font_color = $_POST['font_color'];
    $bg_color = $_POST['bg_color'];
    setcookie('font_style', $font_style, time() + (86400 * 30), "/");
    setcookie('font_size', $font_size, time() + (86400 * 30), "/");
    setcookie('font_color', $font_color, time() + (86400 * 30), "/");
    setcookie('bg_color', $bg_color, time() + (86400 * 30), "/");
    header('Location: page2.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Page 1</title>
</head>
<body>
    <form method="post" action="">
        <label>Font Style:</label>
        <select name="font_style">
            <option value="Arial">Arial</option>
            <option value="Verdana">Verdana</option>
            <option value="Tahoma">Tahoma</option>
        </select>
        <br><br>
        <label>Font Size:</label>
        <select name="font_size">
            <option value="12px">12px</option>
            <option value="14px">14px</option>
            <option value="16px">16px</option>
        </select>
        <br><br>
        <label>Font Color:</label>
        <input type="color" name="font_color">
        <br><br>
        <label>Background Color:</label>
        <input type="color" name="bg_color">
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
