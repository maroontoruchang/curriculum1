<?php
$number = $_GET['number'];
$omikuji  = $num;

$num = rand(0,9);
 if($omikuji == 0){
   echo "凶" ;
 }elseif ($omikuji == 1,2,3) {
   echo "小吉";
 }elseif ($omikuji == 4,5,6) {
   echo "中吉";
 }elseif ($omikuji == 7,8) {
   echo "吉";
 }else ($omikuji == 9) {
     echo "大吉";
 }

$today = date("Y-m-d");
print_r($today);


<p><?php echo $today; ?> のあなたの運勢 </p>
<p>選ばれた数字は <?php echo $number; ?></p>
<p><?php echo $romikuji; ?> です。</p>

?>