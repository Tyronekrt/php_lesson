<!-- //isset() = Returns true if variable is set, false if not
//empty() = Returns true if variable is empty, false if not -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "index.php" method = "POST">
        <label> username: </label>
        <input type = "text" name = "username" placeholder = "Enter your username">
        <br><br>
        <label> password: </label>
        <input type = "password" name = "password" placeholder = "Enter your password">
        <br><br>
        <input type = "submit" name = "login" value = "Submit">
    </form>
</body>
</html>

<?php
    // foreach($_POST as $key => $value) {
    //     echo "{$key} = {$value}<br>";
    // }
    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(empty($username) || empty($password)) {
            echo "Username or password cannot be empty";
        } else {
            echo "Hello: {$username} <br>";
            
        }
    }
?>