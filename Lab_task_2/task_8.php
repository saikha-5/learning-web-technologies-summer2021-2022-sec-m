<?php

    $array = [
        [1,2,3,'A'],
        [1,2,'B','C'],
        [1,'D','E','F']
    ];
    $k=2;
    for ($i = 0; $i<3; $i++){    

        for($j = 0; $j <=$k; $j++){

        echo $array[$i][$j]." ";

    }
    $k--;
    echo "<br/>";
}
$r=3;
for ($p = 0; $p<=2; $p++){    

    for($q = $r; $q <=3; $q++){

    echo $array[$p][$q]." ";

}
$r--;
echo "<br/>";
}

?>