<?php
function createstaircase($n){

    for($i=0; $i<$n; $i++){

    for($j=0; $j<$n; $j++){

        if($i+$j>$n-1){
            echo "#";
        } else {
           echo " ";
        }
        if($j==$n-1 && $i+$j<$n*2-1){
            echo "\n";
        } 
    }  
   }
}

createstaircase(20);
createstaircase(7);
createstaircase(16);






?>