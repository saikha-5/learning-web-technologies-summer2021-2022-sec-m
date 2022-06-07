<?php
for($i=0;$i<3;$i++){
    for($j=0;$j<=$i;$j++){
        echo "*";
    }
    echo "<br>";
}

for($p=3;$p>0;$p--){
    for($q=1;$q<=$p;$q++){
        echo "$q";
    }
   
    echo "<br>";
    
}
 
$alphabet =range('A','Z');
$index=0;
for($r=0;$r<3;$r++){
    for($s=0;$s<=$r;$s++){
        echo $alphabet[$index]." " ;
        $index=$index+1;
    }
    echo"<br>";
  
}
?>
