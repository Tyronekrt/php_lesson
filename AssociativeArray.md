<!-- Associative arrays in PHP are arrays that use named keys that you assign to them. This allows you to access values in the array using meaningful names instead of numeric indices.
<?php
    $capitals = array(
        "Kenya" => "Nairobi",
        "France" => "Paris",
        "Germany" => "Berlin",
        "Italy" => "Rome",
        "Spain" => "Madrid",
        "United Kingdom" => "London"
    );
    $capitals["United States"] = "Washington, D.C."; // Add a new country and its capital
    $capitals["Kenya"] = "Nyeri"; // Update the capital of Kenya
    // echo $capitals["Kenya"];
    array_pop($capitals); // Remove the last element from the array
    array_shift($capitals); // Remove the first element from the array
    array_flip($capitals); // Flip the keys and values of the array
    foreach ($capitals as $country => $capital) {
        echo "The capital of $country is $capital.<br>";
    }

?>
 -->

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <form action="index.php" method="post">
        <label for="country">Enter a country:</label>
        <input type="text" id="country" name="country" required>
        <input type="submit" value="Submit">
 </body>
 </html>

 <?php
    $capitals = array(
        "Kenya" => "Nairobi",
        "France" => "Paris",
        "Germany" => "Berlin",
        "Italy" => "Rome",
        "Spain" => "Madrid",
        "United Kingdom" => "London"
    );
    $capital =$capitals[$_POST['country']];



    echo "<p>The capital of $_POST[country] is $capital.</p>";
 ?>