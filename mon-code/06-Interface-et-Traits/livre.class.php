<?php
class Livre{
    private string $_titre;
    private int $_dateDeSortie;
    private string $_isbn;
    private string $_resume;

    public function __construct(string $titre, int $dateDeSortie, string $isbn, string $resume){
        $this -> _titre = $titre;
        $this -> _dateDeSortie = $dateDeSortie;
        $this -> _isbn = $isbn;
        $this -> _resume = $resume;
    }

    public function getTitre():string{
        return $this -> _titre;
    }
    public function getDateDeSortie():int{
        return -> _dateDeSortie;
    }
    public function getIsbn():string{
        return -> _isbn;
    }
    public function getResume():string{
        return -> _resume;
    }
    
}