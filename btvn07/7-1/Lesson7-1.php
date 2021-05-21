<?php 

$input=[1,2,4,5,6];

function sumSquare($arr){
    $sum=0;
    foreach($arr as $item) {
        $sum+=$item*$item;
    }

    return $sum;
}

$bigArr = [
  [100,2000],[5000,1000]
];

function mtpAndAdd($arr1) {
    $result=0;
    foreach ($arr1 as $item) {
        $temp=1;
        foreach($item as $child) {
            $temp*=$child;
        }
        $result+=$temp;
    }

    return $result;
}
echo sumSquare($input),"<br>";
echo mtpAndAdd($bigArr);
?>