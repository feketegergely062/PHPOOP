<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Szemely
 *
 * @author Tanar
 */
class Szemely {
    private $tulajdonsagok=[];
    private $nev;
    private $varos;
    private $nyelv;
    /*public function Szemely($nev,$varos,$nyelv){ //KONSTRUKTOR
        $this->nev=$nev;
        $this->varos=$varos;
        $this->nyelv=$nyelv;
    }*/
    public function __construct($nev,$varos,$nyelv){ //KONSTRUKTOR
        $this->nev=$nev;
        $this->tulajdonsagok["nev"]=$nev;
        $this->varos=$varos;
        $this->tulajdonsagok["varos"]=$varos;
        $this->nyelv=$nyelv;
        $this->tulajdonsagok["nyelv"]=$nyelv;
    }
    public function __toString() {
        return "{{$this->nev}: {$this->varos} - {$this->nyelv}}";
    }
    public function __get($azonosito){
        foreach($this->tulajdonsagok as $key => $value){
            if($key==$azonosito){
                return $this->tulajdonsagok[$azonosito];
            }
        }
        return "Ilyen márpedig nincsen!";
    }
    public function __set($azonosito, $ertek) {
        foreach ($this->tulajdonsagok as $key => $value) {
            if($key==$azonosito){
                $this->tulajdonsagok[$azonosito]=$ertek;
                switch($key){
                    case "nev":
                        $this->nev=$ertek;
                        break;
                    case "varos":
                        $this->varos=$ertek;
                        break;
                    case "nyelv":
                        $this->nyelv=$ertek;
                        break;                    
                }
            }
        }
    }
}
