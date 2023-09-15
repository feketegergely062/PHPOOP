<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>A PHP OOP lehetőségei</h1>
        <?php
        //include 'VeletlenDolgok1.php';
        //include_once '';
        require 'VeletlenDolgok.php';
        //require_once '';
        /*$vd=new VeletlenDolgok();
        $vd->setNev("Bálint Dezső");
        //var_dump($vd);
        echo $vd->getNev();
        $a=1;
        $b=3;
        echo "Eredmeny: ".$a/$b;*/
        //echo VeletlenDolgok::VeletlenNev().": ".VeletlenDolgok::VeletlenVaros()." - ".VeletlenDolgok::VeletlenNyelv();
        require 'Szemely.php';
        /*$szemely=new Szemely(
                VeletlenDolgok::VeletlenNev(),
                VeletlenDolgok::VeletlenVaros(),
                VeletlenDolgok::VeletlenNyelv()
        );
        //var_dump($szemely); //=>object(Szemely)#1 (3) { ["nev":"Szemely":private]=> NULL ["varos":"Szemely":private]=> NULL ["nyelv":"Szemely":private]=> NULL }
        echo $szemely;*/
        $szemelyek=[];
        $mennyi=rand(10,400);
        for($i=1;$i<=$mennyi;$i++){
            $szemely=new Szemely(
                    VeletlenDolgok::VeletlenNev(),
                    VeletlenDolgok::VeletlenVaros(),
                    VeletlenDolgok::VeletlenNyelv()
            );
            $szemely->nev="Bálint Dezső";
            $szemelyek[]=$szemely;
        }
        echo "<h2>Létrehozozz személyek száma: $mennyi</h2>";
        foreach ($szemelyek as $szemely) {
            echo $szemely."<br />";
        }
        //echo $szemelyek[0]->nev.", ".$szemelyek[2]->nev;
        //var_dump($szemelyek[0]);
        echo $szemelyek[0]->telefon;
        ?>
    </body>
</html>
