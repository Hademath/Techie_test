<?php
function removeduplicate ($arr) {
  $newArr = [];
  $k = count( $arr);
  for ($i=0; $i < $k; $i++) {
    $x = [];
    $obj = []; 
    $y = count($arr[$i]);
    for ($j=0; $j<$y; $j++) {
      if ($obj[$arr[$i][$j]]) {
          $x[] = 0;
      } else {
        $obj[$arr[$i][$j]] = 1;
        $x[] = $arr[$i][$j];
      }
    }
    $newArr[] = $x;
  }
  return json_encode($newArr);
}

$data = [[1, 3, 1, 2, 3, 4, 4, 3, 5], [1, 1, 1, 1, 1, 1, 1]];

print_r(removeduplicate($data));

?>