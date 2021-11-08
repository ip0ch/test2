<?php
$a =[312,4214,5,23,53,52,3,5];
$min = $a[0];
for ($i =0; $i<count($a); $i++){
if ($min > $a[$i]){
$min = $a[$i];
}
}
echo $min;