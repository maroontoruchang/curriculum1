<?php
// 3章PHP初級_練習問題１
?>
<?php
/*
3章PHP初級_練習問題１
*/
?>

<?php

$fruits = ["りんご" => "100", "みかん" =>"50", "もも" =>"500"];
$quantity = [3,3,6];
echo $quantity[0];
// 3

function getPrice($fruits, $quantity) {
  $price = $fruits *  $quantity;
  return $price;
}

foreach ($fruits as $key => $value) {
	echo $key . "は" . getPrice($fruits, $quantity) . "円です。"."<br>";
}

foreach ($unitprice as $key => $value) {
  echo $key;
  echo "<br>";
  echo $value;
  echo "<br>";
　// この中で関数を呼び出します
}
 
?>
