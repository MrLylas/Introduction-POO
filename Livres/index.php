<h1>POO Livres</h1>

<?php

spl_autoload_register(function ($class_name) {
    require 'classes/' . $class_name . '.php';
});

$stephking = new Auteur("Stephen","King");
echo $stephking->fullName();

$l1 = new Livre("Ca");
$l2 = new Livre("Ca");
$l3 = new Livre("Ca");
$l4 = new Livre("Ca");