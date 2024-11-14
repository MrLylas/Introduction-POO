<?php

spl_autoload_register(function ($class_name) {
    require 'classes/' . $class_name . '.php';
});

$user = new Titulaire("Denilson","Delmas","Montreux-Vieux",1);
$compteBanquaire = new Compte("Compte courant",1200,"€","Delmas");

echo $user->fullValue();
echo $compteBanquaire->fullAccount();
