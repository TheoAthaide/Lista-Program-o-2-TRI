<?php


    function pesoideal($alt, $sex) {

        if ($sex == 1) {
        $peso = (62.1 * $alt) - 44.7;
        return $peso;
        }

        elseif ($sex == 2) {
        $peso = (72.7 * $alt) - 58;
        return $peso;
        }
        }


        print "Informe o seu sexo (1 = fem, 2 = masc): \n";
        $sex = (int) fgets (STDIN);

        print "Informe a sua altura: \n";
        $alt = (float) fgets (STDIN);

        $peso = pesoideal($alt, $sex);

        print "Seu peso ideal é: $peso \n";


