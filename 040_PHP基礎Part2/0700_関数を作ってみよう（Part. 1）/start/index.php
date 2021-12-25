<?php
/*
- 特定の機能を使いまわせるようまとめたもの
- Input(引数)、Output(戻り値)を設定する
*/

$numbers = [1, 2, 3, 4];
$numbers2 = [1, 2, 3];

function sum($numbers)
{ // この場合 numbersを引数という
  $sum = 0;
  foreach ($numbers as $num) {
    $sum = $sum + $num;
  }
  return $sum; //リターンで返る値を戻り値という
  // returnを使用した時点で関数の処理は完結しているため、この行以降にコードを書いても処理されない。
}

$result = sum($numbers);
echo "合計:{$result}<br />";
// sum($numbers2);
// echo  "合計:{$sum}";

// $sum2 = 0;
// foreach ($numbers2 as $num2) {
//   $sum2 = $sum2 + $num2;
// }
// echo  "合計:{$sum2}";
