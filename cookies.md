<?php   
    setcookie("fave_food", "pizza", time() + (86400 * 2), "/");
    setcookie("fave_drink", "chemwaniat", time() + (86400 * 3), "/");
    setcookie("fave_pizza", "peperoni", time() + (86400 * 4), "/");

    foreach($_COOKIE as $key => $value){
        echo"{$key} = {$value} <br>";
        }

    if(isset($_COOKIE["fave_food"])){
        echo"BUY SOME {$_COOKIE["fave_food"]} !!!";
        }
    else{
        echo "I don't know your favorite food";
    }

?>