
<?php
    require('frog.php');
    require('ape.php');
    
    $sheep = new Animal("shaun");
    echo $sheep->name. "<br/>";
    echo $sheep->legs;
    echo $sheep->cold_blooded;

    echo "<br/>";

    $kodok = new Frog("buduk");
    echo $kodok->jump();

    echo "<br/>";
    
    $sungokong = new Ape("kera sakti");
    echo $sungokong->yell();
?>


