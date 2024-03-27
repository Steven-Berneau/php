<?php
class Vache extends Animal implements Herbivore,Mammifere,printable{
    private string $_name;

    public function brouter(){
        return "La vache " . $this->name . "broute des végetaux.";
    }
    public function porter(){
        return "La vache" . $this->name . "porter son veau durant le temps de gestation.";
    }
    public function mettreABas(){
        return "La vache" . $this->name . "Met bas.";
    }
    public function action(){
        return "La vache" . $this->name . "est un herbivore et un mammifère.";
    }


}


