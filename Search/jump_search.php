<?php
/*jump search algorithm*/
//recursion function for searching
function jumpSearch($arr, $x, $i){
    $step = sqrt($i); //block size to be jumped
    $prev = 0; //set initial previous step to 0
    
    //finding where the element is present, if it is present
    while($arr[min($step, $i)-1]<$x){
        $prev = $step;
        $step += sqrt($i);
        if($prev>= $i){
            return -1;
        }
    }

    //doing a linear seach for x in the array, starting from the prev
    while($arr[$prev]<$x){
        $prev++;
        if($prev == min($step,$n)){ //if we reached next block or end of the block, then element is not exists
            return -1;
        }
    }

    //if element is found in the aray
    if($arr[$prev]==$x){
        return $prev;
    }
    return -1; //return -1 if none of the condition is fulfilled
}
//completed

function jump_search($search, $data, $i){
    $result = binarySearch($data, 0, $i, $search);
    echo "<b>";
    if($result==-1){
        echo "Element was not present in the array!";
    }else{
        echo "Element was found on the index number ".$result." of the array!";
    }
    echo "</b>";
    echo "<br/><br/>";
    echo "<b>Time complexity :</b> <b style=\"color:green\">O(√n)</b><br/>";
    echo "<b>Space complexity :</b> <b style=\"color:green\">O(1)</b><br/>";
}
/*done*/
?>