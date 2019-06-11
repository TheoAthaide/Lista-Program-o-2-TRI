<?php


print "Digite uma temperatura em Fahrenheit: \n";
$tempf = (float) fgets(STDIN);
$tempc = farcel($tempf);
print "\n$tempf Fahrenheits equivale a $tempc Celcius \n\n";


    function farcel($tempf){

        $tempc = ($tempf - 32) * 5/9;
        return $tempc;
    }

   