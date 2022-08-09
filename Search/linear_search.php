<?php
/*linear search algorithm*/
function linear_search($search, $data, $i){
    $result = -1; //index of the result, initially -1
    
    for($x=0; $x<$i; $x++){ //iterating through the loop
        if($data[$x]==$search){ //checking if the value matches with what we are looking for
            $result = $x; //update result variable if matched
        } //end check statement
    } //end loop

    /*completed!
    /*Print the result*/
    echo "<b>";
    if($result==-1){
        echo "Element was not present in the array!";
    }else{
        echo "Element was found on the index number ".$result." of the array!";
    }
    echo "</b>";
    echo "<br/><br/>";
    echo "<b>Time complexity :</b> <b style=\"color:green\">O(n)</b><br/>";
    echo "<b>Space complexity :</b> <b style=\"color:green\">O(1)</b><br/>";
}
/*done*/
?>