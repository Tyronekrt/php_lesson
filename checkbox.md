<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "index.php" method = "POST">
        <input type = "checkbox" name = "pizza" value = "Pepperoni"> Pepperoni<br>
        <input type = "checkbox" name = "pizza" value = "Mushroom"> Mushroom<br>
        <input type = "checkbox" name = "pizza" value = "Onion"> Onion<br>
        <input type = "submit" name = "Submit" value = "Submit">
    </form>
</body>
</html>
<?php
    if (isset($_POST['Submit'])) {
        if (isset($_POST['pizza'])) {
            $selected_pizza = $_POST['pizza'];
            echo "You have selected: " . $selected_pizza;
        } else {
            echo "No pizza selected.";
        }
    }
?>