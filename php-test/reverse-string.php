<?php

//Task 21 reverse array
$string  = 'Qwords adalah perusahaan yang bergerak di bidang Web Hosting';

$array = explode(' ', $string);
$size = sizeof($array);

for($i=$size-1; $i>=0; $i--){
    echo $array[$i]. ' ';
}

?>