<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="number" placeholder="Enter a number to count to">
        <input type="submit" value="Start Counting">
    </form>
</body>
</html>


<?php
if ($_POST['number']) {
    $number = $_POST['number'];
    for ($x = $number; $x >= 1; $x--) {
        echo "The number is: $x <br>";
    }
}
?>