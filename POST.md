<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
     <label>quantity</label> <br>
       <input type="text" name="quantity" id="">
       <input type="submit" value="total">
    </form>
</body>
</html>
<?php 
    $item = "pizza";
    $price = 10.99;
    $quantity = $_POST["quantity"];
    $total = null;

    $total = $price * $quantity;

    echo "You have ordered {$quantity} X {$item}s" . "<br>";

    echo "Your total is: \${$total}";

?>