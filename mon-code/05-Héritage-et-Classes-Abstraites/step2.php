<?php
include_once "character.class.php";
include_once "duel.class.php";
include_once "hero.class.php";
include_once "monstre.class.php";

$albert = new Hero(name:"Albert",pv:10,ac:8,attaque:10,degats:5);
$guraktak = new Monstre(name:"Guraktak",pv:15,ac:2,attaque:10,degats:6);
echo $albert;
echo $guraktak;
$vainqueur = Duel::jouerDuel($albert,$guraktak);
if ($vainqueur)
    echo "Le gagnant est" .$vainqueur->getName();
else 
    echo "Match nul!";