<?php
//
//3
//sato
//suzuki
//takahashi
//3 takahashi

//3
$n = (int)trim(fgets(STDIN));

//
$array = [];
for($i = 0; $i < $n; $i++){
    $array[] = trim(fgets(STDIN));
}

list($key, $value) = explode(' ', trim(fgets(STDIN)));

echo $array[$key-1] === $value? 'Yes' : 'No';


