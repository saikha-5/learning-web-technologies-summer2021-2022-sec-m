<?php
$values = [12, 45,39];
function search($value){
    for ($i=0;$i<count($values);$i++){
        if($values[$i]==$value){
            echo "Element found in the array";
        }
        else {
            echo "Not found in the array";
        }
    }
}
search(12);
?>