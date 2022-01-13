<?php
// 関数を作るpart2

// デフォルト引数
// 文字列を関数として実行可能
// "(ダブルクオーテーション)で囲ってもその後に(引数)がある場合関数として実行できる。
// round 四捨五入する

$price = 1000;

function with_tax($base_price, $tax_rate = 0.1)
{
  $sum_price = $base_price + ($base_price * $tax_rate);
  $sum_price = round($sum_price);
  return $sum_price;
}


$fun = "with_tax";
$price = $fun($price);
echo $price;
