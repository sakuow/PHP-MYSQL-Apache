<?php

/** DocCommentについて
 * 税率計算のための関数を記述したファイル
 * 
 * @author CodeMafia
 * @since 1.0.0
 */

$price = 1000;

/**
 * 税込金額を取得する関数
 * 
 * 補足説明 ~~
 * 
 * @param int $base_price 価格
 * @param float $tax_rate 税率
 * 
 * @return int 戻り値　税込金額
 * もしくは
 * @return void 戻り値がない場合
 * @see https://example.com/　参考にしたリファレンスなど
 */
// $tax_rate = 0.1　はデフォルト引数といいfunctionにより変数を作成する際に値を設定しておくことができる。
function with_tax($base_price, $tax_rate = 0.1)
{
  $sum_price = $base_price + ($base_price * $tax_rate);
  $sum_price = round($sum_price);
  return $sum_price;
}

$price = with_tax($price);
echo "購入金額は{$price}です。";
