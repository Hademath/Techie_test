<?php

function addSumRecursevely($nums)
{
    if($nums<10)
         return $nums;
    else 
        return $nums%10 + addSumRecursevely(floor($nums/10));

}

echo addSumRecursevely(01), "\n";
echo addSumRecursevely(78), "\n";
echo addSumRecursevely(19742411), "\n";

?> 