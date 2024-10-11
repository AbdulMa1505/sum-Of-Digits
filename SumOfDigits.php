<?php

function DigitSum($x){
    $sum =0;
    while($x>0){
        $number =$x%10;
        $sum+=$number;
        $x =(int)($x/10);
    }
    return $sum;
}
$result = DigitSum(34);
echo "the sum of the digit is" $result;
?>
