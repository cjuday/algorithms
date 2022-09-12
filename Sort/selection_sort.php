<?php
function selection_sort($arr, $size){
  for($i=0; $i<$size; $i++){
    $min_idx = $i;
    for($j=$i+1; $j<$size; $j++){
      if($arr[$j]<$arr[$min_idx]){
        $min_idx = $j;
      }
    }
      if($min_idx != $i){
        $temp = $arr[$min_idx];
        $arr[$min_idx] = $arr[$i];
        $arr[$i] = $temp;
      }
  }

  echo "<b>";
  for($i=0; $i<$size; $i++){
    echo "[".$i."] => ".$arr[$i]."<br/>";
  }
  echo "</b>";
  echo "<br/><br/>";
  echo "<b>Time complexity :</b> <b style=\"color:green\">O(n^2)</b><br/>";
  echo "<b>Space complexity :</b> <b style=\"color:green\">O(1)</b><br/>";
}

?>
