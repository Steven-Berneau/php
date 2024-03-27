<?php
class Chat extends Animal implements Predateur,Mammifere,printable{
    private string $_name;

public function chasser(){
    return "Le chat " . $this->name . "chasse des petits mammifères.";
}
public function porter(){
    return "Le chat" . $this->name . "porter son chaton durant le temps de gestation.";
}
public function mettreABas(){
    return "Le chat" . $this->name . "Met bas.";
}
public function action(){
    return "Le chat" . $this->name . "est un prédateur et un mammifère.";
}
}


