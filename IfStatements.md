<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
    <label>Age:</label>
    <input type="number" name="age" >
    <input type = "submit" value="total">
    </form>
</body>
</body>
</html>

<?php
    $age = $_POST['age'];
    if ($age >= 18 && $age <= 50) {
        echo "You are an adult.";
    } 
    elseif ($age <=0) {
        echo "Age cannot be negative or zero.";
    }
    elseif ($age > 50) {
        echo "You are approaching death.";
    }
    else {
        echo "You are a minor.";
    }

?>