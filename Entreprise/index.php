<h1>POO Entreprise</h1>


<?php

// permet d'auto-charger des classes
spl_autoload_register(function ($class_name) 
{
    require 'classes/'.$class_name . '.php';
});

$elanFormation = new Entreprise("ELAN FORMATION", "1993-01-01","10 rue de Bruxelles","68100","MULHOUSE");
$tf1 = new Entreprise("TF1", "1970-01-01","13 rue de la Seine","7500","Paris");
$poleEmploi = new Entreprise("Pole Emploi", "2000-01-01","1 avenue de la Gare","67000","STRASBOURG");

$stephane = new Employe("Stephane","SMAIL","stephane.smail@elan-formation.fr");
$maxime = new Employe("Maxime","BILBAN","maxime.bilban@elan-formation.fr");

$cl =new Contrat($elanFormation, $stephane, "2020-01-01");
$c2 =new Contrat($elanFormation, $maxime, "2010-01-01");
$c3 =new Contrat($tf1, $stephane, "2022-01-01");
$c4 =new Contrat($poleEmploi, $stephane, "2023-01-01");



echo $elanFormation-> afficherEmployer() ;
echo $tf1-> afficherEmployer() ;
echo $poleEmploi-> afficherEmployer() ;

echo $maxime-> afficherEntreprise() ;
echo $stephane-> afficherEntreprise() ;
?>
