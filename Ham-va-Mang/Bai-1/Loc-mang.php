<?php
function locMang($arr){
    return array_unique($arr);
}
$arr = [1,1,1,2,2,2,3,3,3];
echo "<pre>";
print_r(locMang($arr));
