<?php

$myfile = fopen("data.txt","w");
$total_number = 20;
$range = 500;

if($myfile){
    $i = $total_number;
    while($i>=1){
        $rand = rand(1,$range);
        fwrite($myfile, $rand."\n");
        $i--;
    }
    echo "Random number generated!";
}

fclose($myfile);

?>