<?php
if(isset($_COOKIE['font_style']) && isset($_COOKIE['font_size']) && isset($_COOKIE['font_color']) && isset($_COOKIE['bg_color'])) {
    $font_style = $_COOKIE['font_style'];
    $font_size = $_COOKIE['font_size'];
    $font_color = $_COOKIE['font_color'];
    $bg_color = $_COOKIE['bg_color'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Page 2</title>
    <style>
        body {
            font-family: <?php echo $font_style; ?>;
            font-size: <?php echo $font_size; ?>;
            color: <?php echo $font_color; ?>;
            background-color: <?php echo $bg_color; ?>;
        }
    </style>
</head>
<body>
    <h1>Selected Settings</h1>
    <p>Font Style: <?php echo $font_style; ?></p>
    <p>Font Size: <?php echo $font_size; ?></p>
    <p>Font Color: <?php echo $font_color; ?></p>
    <p>Background Color: <?php echo $bg_color; ?></p>
    <a href="page1.php">Go Back</a>
    <a href="page3.php">Go to Page 3</a>
</body>
</html>
