<?php
class Poule extends Animal implements Ovipare,printable{
    private string $_name;

    public function couver(){
        return "La poule " . $this->name . "couve ses oeufs.";
    }
    public function pondre(){
        return "La poule" . $this->name . "ponds des oeufs qui deviennent des poussins.";
    }
    public function action(){
        return "La poule" . $this->name . "est un ovipare et omnivore.";
    }

}




