<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "index.php" method = "POST">
        <input type = "radio" value = "Visa" name = "card">Visa<br>
        <input type = "radio" value = "MasterCard" name = "card">MasterCard<br>
        <input type = "radio" value = "American Express" name = "card">American Express<br>
        <input type = "submit" name = "Submit" value = "Submit">
    </form>
</body>
</html>
<?php
    if(isset($_POST['Submit'])){

    if(isset($_POST['card'])){
        $card = $_POST['card'];
        echo $card;
    }
    else{
        echo "Please select a card type.";
    }
}