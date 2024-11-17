<h1>POO Hotel</h1>

<?php

spl_autoload_register(function ($class_name) {
    require 'classes/' . $class_name . '.php';
});

//Hotels :

$hilton = new Hotel("Hilton","****","Strasbourg","10 avenue de la gare","67000");
$regent = new Hotel("Regent","***","Paris","61 rue Dauphine","75006");


//Chambres :

$chambre1 = new Chambres("Chambre 1",120,2, true,$hilton);
$chambre2 = new Chambres("Chambre 2",120,2, true,$hilton);
$chambre3 = new Chambres("Chambre 3",120,2, false,$hilton);
$chambre4 = new Chambres("Chambre 4",120,2, false,$hilton);
$chambre16 = new Chambres("Chambre 4",300,2, true,$hilton);
$chambre17 = new Chambres("Chambre 5",300,2, false,$hilton);
$chambre18 = new Chambres("Chambre 6",300,2, true,$hilton);
$chambre19 = new Chambres("Chambre 7",300,2, true,$hilton);

//Clients :

$client1 = new Clients("Micka","Murmann");
$client2 = new Clients("Virgile","Gibello");

//Reservations :

$resa1 =new Reservations($chambre17,$client2,"01-01-2021","01-01-2021");
$resa2 =new Reservations($chambre3,$client1,"11-03-2021","11-03-2021");
$resa3 =new Reservations($chambre4,$client1,"01-04-2021","01-04-2021");



//var_dump :

var_dump($hilton);
var_dump($regent);
var_dump($chambre17);
var_dump($resa1);
var_dump($resa2);
var_dump($resa3);

