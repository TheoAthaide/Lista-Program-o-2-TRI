<?php 

    function media($n1, $n2){

        $media = ($n1 + $n2) / 2;
        return $media;
    }

    print "Insira a primeira nota\n";
    $n1 = (int) fgets (STDIN);

    print "Insira a segunda nota\n";
    $n2 = (int) fgets (STDIN);

    $media = media($n1, $n2);


    if($media >= 6){
        print "PARABÉNS! Voce foi aprovado!\n\n";
    }

    else{
        print "Voce foi reprovado );\n\n";   
     }