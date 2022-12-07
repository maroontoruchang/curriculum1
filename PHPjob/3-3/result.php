<?php

$number = $_GET["number"];

$array = str_split($number);
$keys = array_rand($array,1);
$num = $array[$keys];
$omikuji  = $num;

 if($omikuji == 0){
   $unsei = "凶" ;
 }elseif ($omikuji <= 3) {
   $unsei = "小吉";
 }elseif ($omikuji <= 6) {
   $unsei = "中吉";
 }elseif ($omikuji <= 8) {
   $unsei = "吉";
 }elseif ($omikuji == 9) {
   $unsei = "大吉";
 }

$today = date("Y-m-d");

?>

<p><?php echo $today; ?> のあなたの運勢 </p>
<p>選ばれた数字は <?php echo $omikuji; ?></p>
<p><?php echo $unsei; ?> です。</p>