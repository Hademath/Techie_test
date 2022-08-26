<?php

function printtimeinworsd($H, $M){
    $array_minutes = ["O'clock", "one", "two", "three", "four",
    "five", "six", "seven", "eight", "nine",
    "ten", "eleven", "twelve", "thirteen",
    "fourteen", "fifteen", "sixteen", "seventeen",
    "eighteen", "nineteen", "twenty", "twenty one",
    "twenty two", "twenty three", "twenty four",
    "twenty five", "twenty six", "twenty seven",
    "twenty eight", "twenty nine"];
       
     if ($M > 30)
        echo $array_minutes[60 - $M],
             " minutes to ",
             $array_minutes[($H % 12) + 1], "\n";

    else if ($M == 0)
        echo $array_minutes[$H],
             " O'clock\n" ;
 
    else if ($M == 1)
        echo "one minute past ",
                $array_minutes[$H], "\n";
 
    else if ($M == 59)
        echo "one minute to ",
             $array_minutes[($H % 12) + 1], "\n";
 
    else if ($M == 15)
        echo "quarter past ",
             $array_minutes[$H], "\n";
 
    else if ($M == 30)
        echo "half past ",
           $array_minutes[$H],"\n";
 
    else if ($M == 45)
        echo "quarter to ",
             ($array_minutes[($H % 12) + 1]), "\n";

    else if ($M < 30)
        echo $array_minutes[$M],
             " minutes past ",
               $array_minutes[$H],"\n";
}
$H = 98;
$M = 0;
 
// printtimeinworsd(2, 9);
printtimeinworsd($H, $M);
?>