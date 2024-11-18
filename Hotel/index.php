<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/19a031a4c5.js" crossorigin="anonymous"></script>
</head>

<div class="title-container">
    <h1 class="main-title">POO Hotel</h1>
</div>
</html>


<?php

spl_autoload_register(function ($class_name) {
    require 'classes/' . $class_name . '.php';
});

//Hotels :

$hilton = new Hotel("Hilton","****","Strasbourg","10 avenue de la gare","67000");
$regent = new Hotel("Regent","***","Paris","61 rue Dauphine","75006");


//Chambres :

$chambre1 = new Chambres("Chambre 1",120,2, false,false,$hilton);
$chambre2 = new Chambres("Chambre 2",120,2, false,false,$hilton);
$chambre3 = new Chambres("Chambre 3",120,2, true,true,$hilton);
$chambre4 = new Chambres("Chambre 4",120,2, false,true,$hilton);
$chambre5 = new Chambres("Chambre 5",120,2, false,false,$hilton);
$chambre6 = new Chambres("Chambre 6",120,2, false,true,$hilton);
$chambre7 = new Chambres("Chambre 7",120,2, false,false,$hilton);
$chambre8 = new Chambres("Chambre 8",120,2, false,false,$hilton);
$chambre9 = new Chambres("Chambre 9",120,2, false,true,$hilton);
$chambre10 = new Chambres("Chambre 10",120,2, false,false,$hilton);
$chambre11 = new Chambres("Chambre 11",120,2, false,false,$hilton);
$chambre12 = new Chambres("Chambre 12",120,2, false,true,$hilton);
$chambre13 = new Chambres("Chambre 13",120,2, false,false,$hilton);
$chambre14 = new Chambres("Chambre 14",120,2, false,true,$hilton);
$chambre15 = new Chambres("Chambre 15",120,2, false,true,$hilton);
$chambre16 = new Chambres("Chambre 16",300,2, true,true,$hilton);
$chambre17 = new Chambres("Chambre 17",300,2, false,true,$hilton);
$chambre18 = new Chambres("Chambre 18",300,2, true,false,$hilton);
$chambre19 = new Chambres("Chambre 19",300,2, true,false,$hilton);

//Clients :

$client1 = new Clients("Micka","Murmann");
$client2 = new Clients("Virgile","Gibello");

//Reservations :

$resa1 =new Reservations($chambre17,$client2,"01-01-2021","01-01-2021");
$resa2 =new Reservations($chambre3,$client1,"11-03-2021","11-03-2021");
$resa3 =new Reservations($chambre4,$client1,"01-04-2021","01-04-2021");




echo $hilton->getInfos();
echo $hilton->afficherReservations();
echo $regent->afficherReservations();
echo $client1->afficherReservations();
echo $hilton->afficherStatut();



//var_dump :

// var_dump($hilton);
// var_dump($regent);
// var_dump($client1);
// var_dump($client2);
// var_dump($chambre17);
// var_dump($resa1);
// var_dump($resa2);
// var_dump($resa3);



