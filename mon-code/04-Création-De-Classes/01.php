<?php
declare(strict_types=1);
require_once('Stagiaire-Classe.php');

//  $personne1 = ['prenom'=>'Steven','nom'=>'BERNEAU'];
// $personne2 = ['prenom'=>'Adelbert','nom'=>'STEINER'];
// $personnes = [$personne1,$personne2];
// var_dump($personnes);

$stagiaire = new stagiaire();
$stagiaire -> nom = 'BERNEAU';
$stagiaire -> prenom = 'Steven';
$stagiaire -> nom = 'STEINER';
$stagiaire -> prenom = 'Adelbert';
var_dump($stagiaire);
?>