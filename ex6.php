<?php

    function inter($n1, $n2){

        $soma = 0;
        for ($i=$n1; $i <= $n2 ; $i++) { 
            $soma += $i;
        }
        return $soma;


    }

    print "Digite o primeiro numero: \n";
    $n1 = (int) fgets (STDIN);

    print "Digite o segundo numero: \n";
    $n2 = (int) fgets (STDIN);

    $soma = inter($n1, $n2);
    print "A soma de $n1 e $n2 é $soma \n";
