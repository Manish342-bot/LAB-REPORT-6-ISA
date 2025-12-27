<!DOCTYPE html>
<html>
<body>

<?php
if (!isset($_POST['city'])) {
?>
    <form method="post">
        Favorite City: <input type="text" name="city">
        <input type="submit">
    </form>
<?php
} else {
    echo "Your favorite city is " . $_POST['city'];
}
?>

</body>
</html>
