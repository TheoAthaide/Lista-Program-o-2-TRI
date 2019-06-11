<?php
    
    function hipotenusa($cat1, $cat2) {

        $hip = sqrt($cat1 * $cat1 + $cat2 * $cat2);
        return $hip;
    }

    print "Digite o valor do 1 cateto: \n";
    $cat1 = (int) fgets(STDIN);

    print "Digite o valor do 2 cateto: \n";
    $cat2 = (int) fgets(STDIN);

    $hip = hipotenusa($cat1, $cat2);

    print "A hipotenusa é igual a $hip \n\n";
