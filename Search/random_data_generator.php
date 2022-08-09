<?php

$myfile = fopen("data.txt","w"); //creating file using the opening file function (fopen())
$total_number = 20; //total number which will be generated
$range = 500; //maximum range of random number

if($myfile){ //check if the file is created or not
    $i = $total_number;
    while($i>=1){ //loop for iteration
        $rand = rand(1,$range); //random number generator
        fwrite($myfile, $rand."\n"); //writing the random number to file
        $i--; //decreasing loop count
    } //end loop
    echo "Random number generated!"; //confirmation message
} //end file opening check

fclose($myfile); //closing the file after end of writing
?>