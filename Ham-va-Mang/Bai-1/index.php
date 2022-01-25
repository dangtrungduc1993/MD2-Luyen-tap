<?php
function sapXep($arr){
    for ($i = 0; $i < 10 ; $i++){
        $arr[] = rand(1,100);
    }
    sort($arr);
    return $arr;
}
$arr = [];
echo "<pre>",
print_r(sapXep($arr));
