<?php

namespace lib;

const TAX_RATE = 0.1;

// $tax_rate = TAX_RATEの部分は同じ名前空間ないにある場合は\libは必要ない。
// 他の名前空間から参照して使用する場合に＼libが必要となる。
function with_tax($base_price, $tax_rate = TAX_RATE)
{
  $sum_price = $base_price + ($base_price * $tax_rate);
  $sum_price = round($sum_price);
  return $sum_price;
}
