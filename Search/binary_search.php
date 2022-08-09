<?php
/*binary search algorithm*/
function binarySearch($arr, $l, $r, $x){
    if ($r >= $l){
        $mid = ceil($l + ($r - $l) / 2); //calculating middle point of the array
        if ($arr[$mid] == $x) //if middle point's value is the searched value then return index
            return floor($mid);
            
        if ($arr[$mid] > $x) //if seached value is smaller than middle point's value
            return binarySearch($arr, $l,
                                $mid - 1, $x);

        return binarySearch($arr, $mid + 1, //else if search value is greater than middle point's value
                            $r, $x);
    }
    return -1; //return -1 if not found
}

function binary_search($search, $data, $i){
    $result = binarySearch($data, 0, $i, $search);
    echo "<b>";
    if($result==-1){
        echo "Element was not present in the array!";
    }else{
        echo "Element was found on the index number ".$result." of the array!";
    }
    echo "</b>";
    echo "<br/><br/>";
    echo "<b>Time complexity :</b> <b style=\"color:green\">O(log n)</b><br/>";
    echo "<b>Space complexity :</b> <b style=\"color:green\">O(log n)</b><br/>";
}
/*done*/
?>