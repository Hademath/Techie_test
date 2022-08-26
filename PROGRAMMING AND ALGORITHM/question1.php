<?php

function printWords($h, $m){
    $array_minutes = ["O'clock", "one", "two", "three", "four",
                  "five", "six", "seven", "eight", "nine",
                  "ten", "eleven", "twelve", "thirteen",
                  "fourteen", "fifteen", "sixteen", "seventeen",
                  "eighteen", "nineteen", "twenty", "twenty one",
                  "twenty two", "twenty three", "twenty four",
                  "twenty five", "twenty six", "twenty seven",
                  "twenty eight", "twenty nine"];
     
     
 
     if ($m > 30)
        echo $array_minutes[60 - $m],
             " minutes to ",
             $array_minutes[($h % 12) + 1], "\n";

    else if ($m == 0)
        echo $array_minutes[$h],
             " O'clock\n" ;
 
    else if ($m == 1)
        echo "one minute past ",
                $array_minutes[$h], "\n";
 
    else if ($m == 59)
        echo "one minute to ",
             $array_minutes[($h % 12) + 1], "\n";
 
    else if ($m == 15)
        echo "quarter past ",
             $array_minutes[$h], "\n";
 
    else if ($m == 30)
        echo "half past ",
           $array_minutes[$h],"\n";
 
    else if ($m == 45)
        echo "quarter to ",
             ($array_minutes[($h % 12) + 1]), "\n";

    else if ($m < 30)
        echo $array_minutes[$m],
             " minutes past ",
               $array_minutes[$h],"\n";
 

}
 
// Driver Code
$h = 6;
$m = 00;
 
printWords($h, $m);
?>