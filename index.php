<?php
    require('animal.php');
    require('ape.php');
    require('frog.php');

    $sheep = new animal("Shaun");
    
    echo $sheep->name ."<br>";
    echo $sheep->legs ."<br>";
    echo $sheep->cold_blooded  ."<br>";

    echo "<br>";
    $sungokong = new ape("kera sakti");
    echo $sungokong -> name ."<br>";
    echo $sungokong -> legs ."<br>";
    echo $sungokong -> yell() ."<br>";


    echo "<br>";
    $kodok = new frog("buduk");
    echo $kodok -> name ."<br>";
    echo $kodok -> legs ."<br>";
    echo $kodok -> jump() ."<br>";

?>