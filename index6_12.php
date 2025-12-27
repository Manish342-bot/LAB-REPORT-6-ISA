<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
function rectangleArea($l, $w) {
    return "A rectangle of length $l and width $w has an area of " . ($l * $w) . ".";
}

if (!isset($_POST['length'])) {
?>
<form method="post">
    Length: <input type="text" name="length"><br>
    Width: <input type="text" name="width"><br>
    <input type="submit">
</form>
<?php
} else {
    echo rectangleArea($_POST['length'], $_POST['width']);
}
?>
  
</body>
</html>