<?php
    
    $username = "Tyrone";
    $phone = "123-456-7890";
    $address = "123 Main St, Anytown, USA";

    // $username = strtoupper($username);
    // $useraname = strtolower($username);
    // $useraname = ucfirst($username);
        // $useraname = trim($username);


        $usename = implode(" <br> ", [$username, $phone, $address]);
    echo "Hello, $username! Welcome to our website.";
    echo "<br>";
    echo "Your contact information: $usename";

?>