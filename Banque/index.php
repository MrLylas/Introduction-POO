<style>
    .titu{
        border: 2px solid black;
    }
</style>


<?php

spl_autoload_register(function ($class_name) {
    require 'classes/' . $class_name . '.php';
});   

$t1=new Titulaire("Delmas","Denilson","24-09-1998","Mulhouse");
$t2=new Titulaire("Verratti","Marco","05-11-1992","Pescara");

$c1=new Compte("Compte courant",1600,"€",$t1);
$c2=new Compte("Livret A",1200,"€",$t1);
$c3=new Compte("Compte courant",120000,"€",$t2);
$c4=new Compte("Livret A",900000,"€",$t2);
?>
<div class='titu'>
    <?php 
    $t1->getInfosTitulaire();
    ?>
</div>
<div class="titu">
    <?php
    $t2->getInfosTitulaire();
    ?>
</div>