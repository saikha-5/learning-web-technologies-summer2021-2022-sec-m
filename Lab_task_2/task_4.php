<?php
function find_largest($first_N,$second_N, $third_N){
    if($first_N>$second_N && $first_N>$third_N){
        echo"$first_N is the largest number";

    }
    else if ($first_N<$second_N && $second_N > $third_N){
        echo"$second_N is the largest number";
    }
    else{
        echo"$third_N is the largest number";
    }
}
find_largest(12,45,32);
?>