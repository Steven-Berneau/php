<?php
class Character{
    private string $_name;
    private int $_pv;
    private int $_attaque;
    private int $_ac;
    private int $_degats;

    public function __construct(string $name, int $pv, int $attaque, int $ac, int $degats){
        $this ->_name = $name;
        $this ->_pv = $pv;
        $this ->_attaque = $attaque;
        $this ->_ac = $ac;
        $this ->_degats = $degats;
    }

    public function getName():string{
        return $this -> _name;
    }
    public function getPV():int{
        return $this -> _pv;
    }
    public function getAttaque():int{
        return $this -> _attaque;
    }
    public function getAC():int{
        return $this -> _ac;
    }
    public function getDegats():int{
        return $this -> _degats;
    }

    public function subirDegats(): string{
        echo "Nom: " . $this -> _name . "PV: " . $this -> _pv . "Attaque: " . $this -> _attaque . "AC: " . $this -> _ac . "Dégats: " . $this -> _degats; 
    }


}
