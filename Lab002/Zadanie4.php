<?php

$text1 = "Programuje dobrze";
$text2 = "dobrze w php";
print strlen($text1).PHP_EOL;
print strrev($text2).PHP_EOL;
if(strlen($text1)>strlen($text2)){
    print "Zmienna text1 jest dłuższa niż text2\n";
}elseif(strlen($text1)<strlen($text2)){
    print "Zmienna text2 jest dłuższa niż text1\n";
}else{
    print "Zmienne mają równą długość\n";
}
str_contains($text1, "Programuje")?print "Zawiera\n":print "Nie zawiera\n";
str_starts_with($text2, "dobrze")?print "Zaczyna sie\n":print "Nie zaczyna sie\n";
print trim($text1)." ".trim($text2).PHP_EOL;
$text3 = trim($text1)." ".trim($text2);
print $text3.PHP_EOL;
print str_replace("dobrze", "zle",$text1).PHP_EOL;
print strpos($text2,"php").PHP_EOL;

?>