<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>radius:</label>
        <input type="text" name="radius">
        <input type="submit" value="calculate">
    </form>
</body>
</html>
<?php 
    $radius = $_POST['radius'];
    $circumference = null;
    $area = null;
    $volume = null;

    $circumference = 2 * pi() * $radius;
    $circumference = round($circumference, 2);

    $area = pi() * pow($radius, 2);
    $area = round($area, 2);

    $volume = (4/3) * pi() * pow($radius, 3);
    $volume = round($volume, 2);


    echo "The circumference of the circle with radius $radius is: {$circumference}cm <br>";
    echo "The area of the circle with radius $radius is: {$area}cm<sup>2</sup> <br>";
    echo "The volume of the sphere with radius $radius is: {$volume}cm<sup>3</sup> <br>";


?>