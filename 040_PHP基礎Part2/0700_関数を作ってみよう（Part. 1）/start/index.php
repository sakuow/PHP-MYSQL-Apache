<?php
// 関数を作成する
$numbers = [1, 2, 3, 4];
$numbers2 = [1, 2, 3,];

function sum($numbers) //引数
{
  $sum = 0;
  foreach ($numbers as $num) {
    $sum += $num;
  }
  return $sum; // 戻り値
  // returnを使った場合、処理は終了されるため、以降に処理を書いても実行されない。
  // 例: echo "合計:{$sum}<br />";　等
}

$result = sum($numbers);
echo "合計：{$result}<br />";
// sum($numbers2);
// $sum2 = 0;
// foreach ($numbers2 as $num2) {
//   $sum2 += $num2;
// }
// echo "合計：{$sum2}";
