<?php
class Monstre extends Character{
    public function toString(){
        return "Je suis" . $this -> _name . "et je suis un monstre.";
    }
}