<?php

function sem($num){

   switch ($num) {

      case 1:
            $sem = "DOM";
            break;

      case 2:
            $sem = "SEG";
            break;

      case 3:
             $sem =  "TER";
            break;

      case 4:
            $sem =  "QUA";
            break;

      case 5:
            $sem = "QUI";
            break;

      case 6:
            $sem =  "SEX";
            break;

      case 7:
            $sem = "SAB";
            break;

    }

    
    if ($num != 1 and $num != 2 and $num != 3 and $num != 4 and $num != 5 and $num != 6 and 
    $num != 7) {

       print "Esse dia não existe";
       exit;

    

    }
    return $sem;
    }


    print "digite o numero de um dia da semana:  \n";
$num =  (int) fgets (STDIN);

$sem = sem($num);


print sem($num);