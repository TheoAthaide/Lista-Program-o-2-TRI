<?php


print "Digite uma distancia em polegadas: \n";
$pol = (float) fgets(STDIN);
$cm = polcm($pol);
print "$pol polegadas equivale a $cm centimetros \n\n";


    function polcm($pol){

        $cm = ($pol * 2.54);
        return $cm;
    }
