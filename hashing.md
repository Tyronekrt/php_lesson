<?php

    $password = "mimi21";
    $hash = password_hash($password, PASSWORD_DEFAULT);

    // echo $hash;

    if (password_verify("mimi21", $hash)) {
        echo "You are logged in";
    } else {
        echo "Incorrect password";
    }

?>