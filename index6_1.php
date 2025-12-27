<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
function isPalindrome($str) {
    $str = str_replace(" ", "", $str); // remove spaces
    $str = strtolower($str);           // convert to lowercase

    return ($str == strrev($str));
}

// Example
$word = "nurses run";


if (isPalindrome($word)) {
    echo "Palindrome";
} else {
    echo "Not Palindrome";
}
?>

</body>
</html>