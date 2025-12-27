<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
$json = '[
    {"name":"Manish","age":20,"city":"Gramthan"},
    {"name":"Rohan","age":22,"city":"Inarwa"},
    {"name":"Harry","age":25,"city":"Biratnagar"}
]';

$data = json_decode($json, true);

echo "<table border='1'>
<tr><th>Name</th><th>Age</th><th>City</th></tr>";

foreach ($data as $row) {
    echo "<tr>
            <td>{$row['name']}</td>
            <td>{$row['age']}</td>
            <td>{$row['city']}</td>
          </tr>";
}
echo "</table>";
?>
   
</body>
</html>