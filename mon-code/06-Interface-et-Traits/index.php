<?php
require_once "animal.class.php";
require_once "poule.class.php";
require_once "chat.class.php";
require_once "chien.class.php";
require_once "vache.class.php";


$chat = new Chat ("Chatwoman");
$chien = new Chien("Cerberus");
$vache = new Vache("Meuh-Meuh");
$poule = new Poule("Babette");



interface Herbivore{
    public function brouter();
    public function mettreABas();
    public function porter();
}

interface Ovipare{
    public function pondre();
    public function couver();
}

interface Predateur{
    public function chasser();
    public function mettreABas();
    public function porter();

}

interface Mammifere{
    public function mettreABas();
    public function porter();
    public function chasser();
    public function brouter();
}



