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
    "Kathmandu", "Tokyo", "Mexico City", "New York City",
    "Mumbai", "Seoul", "Shanghai", "Lagos",
    "Buenos Aires", "Cairo", "London"
);

echo implode(", ", $cities) . "<br><br>";

sort($cities);
echo "<ul>";
foreach ($cities as $city) {
    echo "<li>$city</li>";
}
echo "</ul>";

array_push($cities, "Los Angeles", "Calcutta", "Osaka", "Beijing");

sort($cities);
echo "<ul>";
foreach ($cities as $city) {
    echo "<li>$city</li>";
}
echo "</ul>";
?>
  
</body>
</html>