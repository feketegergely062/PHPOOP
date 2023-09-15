<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of VeletlenDolgok
 *
 * @author Tanar
 */


class VeletlenDolgok {
    /*private $nev;
    private $varos;
    private $nyelv;
    //tulajdonságok/properties

    public function setNev($nev){
        $this->nev=$nev; //$this-> hivatkozás ugyanazt jelenti, mint a Java-ban this.
    }
    public function getNev(){
        return $this->nev;
    }*/
    
    /* Egy osztály esetén, amennyiben metódusai, tulajdonságai azonosítói előtt megjelenik a static
     * minősítés, az adott tartalmak példányosítás nélkül is hozzáférhető. Vagyis ha egy osztály csak és
     * kizárólag ilyenekből épül fel tekinthető STATIKUS-nak, ugyanis, ha vannak static minősítés
     * nélküli tartalmai is, akkor azokhoz a new művelettel végrehajtható példányosítást követően 
     * férhetünk hozzá
     * A dinamikus tartalmakhoz az adott osztályon belül a $this-> hivatkozással férhetünk hozzá
     * Míg a statikus tartalmak esetén (ugyanúgy az osztályban) a self:: hivatkozással
     * -> példányszelektor :: osztályszelektor
     * Az osztályon kívül pedig $peldany-> módon érjük el a dinamikus tartalmakat, magának az osztálynak a
     * névét felhasználva és alkalmazva ::-ot a statikusak lesznek elérhetők
     */
    static private $nevek=["Kiss","Nagy","Tóth","Kovács","Varga"];
    static private $varosok=["Budapest","Miskolc","Pécs"];
    static private $nyelvek=["magyar","angol","kínai","német","orosz","héber","japán"];
    static function VeletlenNev(){
        shuffle(self::$nevek);
        return self::$nevek[0];
    }
    static function VeletlenVaros(){
        $i=rand(0, count(self::$varosok)-1);
        return self::$varosok[$i];
    }
    static function VeletlenNyelv() {
        shuffle(self::$nyelvek);
        return self::$nyelvek[count(self::$nyelvek)-1];
    }
}
?>
