<h1 class="title">POO Livres</h1>

<style>
    body{
        background-color: #420160;
    }
    .title{
        color: #11a1ae;
        font-family: cursive;
    }
    .ecrivain{
        font-size: xx-large;
        font-style: italic;
        color: whitesmoke;
        text-align: center;
    }
    .bouqins{
        color: whitesmoke;
        text-align: center;
    }
</style>

<?php

spl_autoload_register(function ($class_name) {
    require 'classes/' . $class_name . '.php';
});


$stephking = new Auteur("Stephen","King");

$l1 = new Livre("Ca","(1986)","1138");
$l2 = new Livre("Simetierre","(1983)","374");
$l3 = new Livre("Le Fléau","(1978)","823");
$l4 = new Livre("Shining","(1977)","447");

echo $stephking->fullName();

echo $l1->fullValue();
echo $l2->fullValue();
echo $l3->fullValue();
echo $l4->fullValue();