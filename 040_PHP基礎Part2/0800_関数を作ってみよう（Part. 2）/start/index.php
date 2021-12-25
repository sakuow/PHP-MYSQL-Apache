<?php

$price = 1000;

// $tax_rate = 0.1　はデフォルト引数といいfunctionにより変数を作成する際に値を設定しておくことができる。
function with_tax($base_price, $tax_rate = 0.1)
{
  $sum_price = $base_price + ($base_price * $tax_rate);
  $sum_price = round($sum_price);
  return $sum_price;
}

$price = with_tax($price);
echo "購入金額は{$price}です。";
