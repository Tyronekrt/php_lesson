<?php

    include("database.php");

    $username = "Fabian";
    $Password = "Fab2.0";
    $hash = password_hash($Password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (user, password)
            VALUES ('$username', '$hash')";

    try{
        mysqli_query($conn, $sql);
        echo "Registered sucessfully";
    }
    catch(mysqli_sql_exception){
        echo "Unsucessfull Registration";}

    mysqli_close($conn);

?>