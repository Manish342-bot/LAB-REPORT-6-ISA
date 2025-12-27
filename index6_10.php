<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
session_start();

$username = "admin";
$password = "1234";

if (isset($_POST['login'])) {
    if ($_POST['user'] == $username && $_POST['pass'] == $password) {
        $_SESSION['user'] = $username;
        echo "Login successful. Session started.";
    } else {
        echo "Invalid login.";
    }
}
?>

<form method="post">
    Username: <input type="text" name="user"><br>
    Password: <input type="password" name="pass"><br>
    <input type="submit" name="login">
</form>

</body>
</html>