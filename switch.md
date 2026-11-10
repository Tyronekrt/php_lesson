<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="grade">Enter your grade:</label>
        <input type="text" id="grade" name="grade">
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
    $grade = $_POST['grade'];

    switch ($grade) {
        case "A":
            echo "Excellent!";
            break;
        case "B":
            echo "Good job!";
            break;
        case "C":
            echo "You can do better.";
            break;
        case "D":
            echo "You need to work harder.";
            break;
        case "F":
            echo "Failed. Try again.";
            break;
        default:
            echo "Invalid grade.";
    }
?>