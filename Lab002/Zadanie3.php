<?php
    (int)$a = 4;
    define('B',10);
    (int)$a = 7;
    define('B',22);

    print $a.PHP_EOL;
    print B.PHP_EOL;
    //Zmienna B jest stałą, której nie można nadpisać stąd wyskakuje błąd informujący o takiej ewentualności.

?>