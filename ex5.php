<?php

    function lados($lados, $medi){

        if ($lados == 3) {

            $tot = $medi + $medi + $medi;
            return $tot;
        }
        elseif ($lados == 4) {

            $tot = $medi ** 2;
            return $tot;
        }

        elseif ($lados == 5) {

            $tot = "pentagono";
            return $tot;    
        }
    }

    print "Informe a quantidade de lados do polígono (3, 4 ou 5): \n";
    $lados = (int) fgets (STDIN);

    print "Informe a medida dos lados do polígono (em cm): \n";
    $medi = (int) fgets (STDIN);

    $tot = lados($lados, $medi);

    if ($lados == 3) {
        print "O polígono é um triangulo com perimetro $tot \n";
        }
 
    elseif ($lados == 4) {
        print "O polígono é um quadrado com área $tot \n";
        }

    elseif ($lados == 5) {
        print "O polígono é um pentagono \n";
        }