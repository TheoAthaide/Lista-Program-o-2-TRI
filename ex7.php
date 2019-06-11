<?php

function mes($num){

   switch ($num) {

      case 1:
            $mes = "Janeiro";
            break;

      case 2:
            $mes = "Fevereiro";
            break;

      case 3:
             $mes =  "Março";
            break;

      case 4:
            $mes =  "Abril";
            break;

      case 5:
            $mes = "Maio";
            break;

      case 6:
            $mes =  "Junho";
            break;

      case 7:
            $mes = "Julho";
            break;

      case 8:
            $mes =  "Agosto";
            break;

      case 9:
            $mes =  "Setembro";
            break;

      case 10:
            $mes = "Outubro";
            break;

      case 11:
            $mes =  "Novembro";
            break;
            
      case 12:
            $mes =  "Dezembro";
            break;
          }

      if ($num != 1 and $num != 2 and $num != 3 and $num != 4 and $num != 5 and $num != 6 and 
      $num != 7 and $num != 8 and $num != 9 and $num != 10 and $num != 11 and $num != 12) {

         print "Esse mês não existe";
         exit;

      }
    
  return $mes;
        
}

print "digite o numero de um mês:  \n";
$num =  (int) fgets (STDIN);

$mes = mes($num);


print mes($num);