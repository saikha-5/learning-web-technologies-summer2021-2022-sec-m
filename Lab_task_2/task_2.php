<?php
function VAT( $amount){
    $vat=$amount*(15/100);
    echo "The calculated vat is $vat";
}
VAT(344);
?>