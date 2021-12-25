<?php

/**
 * 条件分岐を省略して記述する
 * 
 * 三項演算子の使い方
 * null合体演算子
 */

$arry = [
  'key' => 10,
];

if (isset($arry['key'])) {
  // $arry['key'] *= 10;
} else {
  $arry['key'] = 1;
}


// null合体演算子
// 左辺に右辺を代入し、もし右辺(??の前の文)がnullの場合に??の右の値を代入する。
$arry['key'] = $arry['key'] ?? 1;


// 三項演算子
// issetを用いることで、左辺の変数に値がセットされていない場合に ？の右の処理を行い値を代入する。
$arry['key'] = isset($arry['key']) ? $arry['key'] * 10 : 1;
echo $arry['key'];
