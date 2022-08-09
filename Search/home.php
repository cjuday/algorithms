<?php
include('includes.php');
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

$search = 241; //value which needed to be search
echo "<b>Element to be searched :</b> ".$search."<br/><br/>";

//linear search
echo "<p align='center'><b style='color:red; font-size:22px'><u>Linear Search</b></u></p>";
echo linear_search($search,$data,$i);

//binary search
echo "<p align='center'><b style='color:red; font-size:22px'><u>Binary Search</b></u></p>";
echo binary_search($search,$data,$i);

//jump search
echo "<p align='center'><b style='color:red; font-size:22px'><u>Jump Search</b></u></p>";
echo jump_search($search,$data,$i);
?>