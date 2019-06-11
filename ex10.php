<?php

    function maimen($x, $y){

        if ($x > $y){
            $comp = "$x é maior"; 
        }

        else{
            $comp = "$y é maior";
        }
        return $comp;
    }

    print "digite o primeiro numero:  \n";
    $x =  (int) fgets (STDIN);

    print "digite o segundo numero:  \n";
    $y =  (int) fgets (STDIN);

    $comp = maimen($x, $y);

    print "$comp";