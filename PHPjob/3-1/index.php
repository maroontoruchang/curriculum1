<?php
// 3章PHP初級_FizzBuzz問題
?>
<?php
/*
3章PHP初級_FizzBuzz問題
*/
?>

<?php

// 1から100まで
for ($i=1; $i<=100; $i++)
 {

    // 3と5の両方の倍数になっている場合 "FizzBuzz!!"
    if ($i%3 == 0 && $i%5 == 0) {
        print("FizzBuzz!!");
    }

    // 3の倍数で5の倍数ではない場合"Fizz!!"
    else if($i%3==0 && $i%5!=0)  {
        print("Fizz!!");
    }

    // 5の倍数で3の倍数ではない場合 "Buzz!!"
    else if ($i%5==0 && $i%3!=0) {
        print("Buzz!!");
    }

    // 3の倍数でも、5の倍数でもない場合、その数
    else {
        print($i);
    }
    
    echo "<br>";
}

?>