<?php

/**
 * 定数の使い方
 *
 * - define, constでの定義方法
 * - constはif文や関数の中では使えない
 * - defineではグローバルスコープに値が配置される
 * - constは名前空間内に配置される（名前空間のレクチャーで紹介）
 */

//  function counter($step = 1) {
//    global $num;
//    $num += $step;
//    echo $num;
//    returen $num;
//  }

//  $num = 0;
// counter関数が実行されているのは $numが定義された後になっている。
//  counter(2);

if (!defined('TAX_RATE')) {
  // const TAX_RATE = 0.1;
  define('TAX_RATE', 0.1);
}


// const TAX_RATE = 0.1;
function with_tax($base_price, $tax_rate = TAX_RATE)
{
  $sum_price = $base_price + ($base_price * $tax_rate);
  $sum_price = round($sum_price);
  return $sum_price;
}
$price = with_tax(1000, 0.08);
echo $price;
