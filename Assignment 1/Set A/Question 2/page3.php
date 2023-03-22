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
    <title>Page 3</title>
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
    <h1>Actual Implementation</h1>
</body>
</html>
