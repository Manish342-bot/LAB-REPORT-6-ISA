<!DOCTYPE html>
<html>
<body>

<?php
if (!isset($_POST['day'])) {
?>
    <form method="post">
        Enter a day: <input type="text" name="day">
        <input type="submit">
    </form>
<?php
} else {
    $day = strtolower($_POST['day']);

    if ($day == "monday")
        echo "Laugh on Monday, laugh for danger.";
    elseif ($day == "tuesday")
        echo "Laugh on Tuesday, smile at a stranger.";
    elseif ($day == "wednesday")
        echo "Laugh on Wednesday, laugh for a letter.";
    elseif ($day == "thursday")
        echo "Laugh on Thursday, something better.";
    elseif ($day == "friday")
        echo "Laugh on Friday, laugh for sorrow.";
    elseif ($day == "saturday")
        echo "Laugh on Saturday, joy tomorrow.";
    else
        echo "No poem available for this day.";
}
?>

</body>
</html>
