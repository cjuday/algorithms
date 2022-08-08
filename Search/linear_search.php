<?php
echo "<p align='center'><b style='color:red; font-size:22px'><u>Linear Search</b></u></p>";
$data = explode("\n",file_get_contents("data.txt")); //reading file and inserting data into array

array_pop($data); //removing the last empty index of the array

$i = count($data); //counting array element

/*applying bubble sort to sort the array ascendingly*/
for($x=0; $x<$i; $x++){
    for($y=$x; $y<$i; $y++){
        if($data[$x]>$data[$y]){
            $temp = $data[$x];
            $data[$x] = $data[$y];
            $data[$y] = $temp;
        }
    }
}
/*done*/

/*Presentation of data*/
echo "The array is containing the following data:<br/>";
$ser = 0;
foreach($data as $d){
    echo "[".$ser."] => ".$d."<br/>";
    $ser++;
}
echo "<br/><br/>";
/*done*/
/*linear search algorithm*/

$search = 241; //value which needed to be search
echo "<b>Element to be searched :</b> ".$search."<br/><br/>";
$result = -1; //index of the result, initially -1

for($x=0; $x<$i; $x++){
    if($data[$x]==$search){
        $result = $x;
    }
}

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
?>