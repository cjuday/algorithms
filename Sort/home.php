<?php
include('includes.php');
$data = explode("\n",file_get_contents("data.txt")); //reading file and inserting data into array

array_pop($data); //removing the last empty index of the array

$i = count($data); //counting array element

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
echo "<p align='center'><b>Sorting Algorithms</b></p>";

//linear search
echo "<p align='center'><b style='color:red; font-size:22px'><u>Selection Sort</b></u></p>";
echo selection_sort($data,$i);
?>
