<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        username: <br>
        <input type="text" name="username" id="username">
        <input type="submit" value="login" name="login">
        age: <br>
        <input type="text" name="age" id="age">     
        email: <br>
        <input type="text" name="email" id="email">    

    </form>
</body>
</html>

<?php
    if(isset($_POST['login'])){
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
        echo "Welcome, " . htmlspecialchars($username) . "!";
        $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);
        echo "<br>";
        echo "You are " . htmlspecialchars($age) . " years old.";
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        echo "<br>";
        echo "Your email address is: " . htmlspecialchars($email);
    }
?>