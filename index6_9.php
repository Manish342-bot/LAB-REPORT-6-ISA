<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$cities = array(
    "Nepal" => "Kathmandu",
    "Japan" => "Tokyo",
    "Mexico" => "Mexico City",
    "USA" => "New York City",
    "India" => "Mumbai",
    "Korea" => "Seoul",
    "China" => "Shanghai",
    "Nigeria" => "Lagos",
    "Argentina" => "Buenos Aires",
    "Egypt" => "Cairo",
    "England" => "London"
);

if (!isset($_POST['city'])) {
?>
<form method="post">
    <select name="city">
        <?php
        foreach ($cities as $country => $city) {
            echo "<option value='$country'>$city</option>";
        }
        ?>
    </select>
    <input type="submit">
</form>
<?php
} else {
    $country = $_POST['city'];
    echo $cities[$country] . " is in $country.";
}
?>

</body>
</html>