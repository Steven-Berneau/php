<?php
class Chat extends Animal implements Predateur,Mammifere,printable{
    private string $_name;

    public function chasser(){
        return "Le chien " . $this->name . "chasse des proies.";
    }
    public function porter(){
        return "Le chien" . $this->name . "porter son chiot durant le temps de gestation.";
    }
    public function mettreABas(){
        return "Le chien" . $this->name . "Met bas.";
    }
    public function action(){
        return "Le chien" . $this->name . "est un prédateur et un mammifère.";
    }




   


}