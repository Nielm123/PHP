<?php
    (int)$a = 4;
    define('B',10);
    (float)$c = 4.0;
    $d = 5.667;
    print "Dodawanie: ";
    print $a+B.PHP_EOL;
    print "Dzielenie: ";
    print $a/B.PHP_EOL;
    print "Potegowanie: ";
    print pow($a,B).PHP_EOL;
    print "Dzielenie z reszta: ";
    print B%$a.PHP_EOL;

    if($a==B){
        print "Zmienna A i zmienna B są równe\n";
    }else{
        print "Zmienne A i B są różne\n";
    }
    if($a>B){
        print "Zmienna A jest większa od B\n";
    }else{
        print "Zmienna A jest mniejsza od B\n";
    }
    $a>B?print "Zmienna A jest większa od B\n":print "Zmienna A jest mniejsza od B\n";
    if($a==$c){
        print "Zmienna A i zmienna C są równe\n";
    }else{
        print "Zmienne A i C są różne\n";
    }
    if($a===$c){
        print "Zmienna A i zmienna C są równe\n";
    }else{
        print "Zmienne A i C są różne\n";
    }
    print round($d).PHP_EOL;
    print round($d,2).PHP_EOL;


?>