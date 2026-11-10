
<?php
    

    // function happy_birthday($name, $age) {
    //     echo "Happy Birthday to you! <br>";
    //     echo "Happy Birthday to you! <br>";
    //     echo "Happy Birthday dear $name! <br>";
    //     echo "You are now $age! <br>";
    //     echo "Happy Birthday! <br> <br>";

    // }
    // happy_birthday("John", 20); 
    // happy_birthday("Jane", 35);
    // happy_birthday("Alice", 25);

    function hypotenuse($a, $b) {
        $c = sqrt($a * $a + $b * $b);
        return $c;
    }
    $result = hypotenuse(6, 4);
    $result = round($result, 2);
    echo $result;

?>