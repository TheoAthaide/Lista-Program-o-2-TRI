<?php

    function div($x, $y){

        $mod = $x % $y;

        if ($mod == 0) {
            return "1 \n";
        }
        
        else {
            return "0 \n";
        }
        }


    print "digite o primeiro numero:  \n";
    $x =  (int) fgets (STDIN);

    print "digite o segundo numero:  \n";
    $y =  (int) fgets (STDIN);


    print div($x, $y);