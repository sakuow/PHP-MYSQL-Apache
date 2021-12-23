<?php
$array = [
  ['table', 1000],
  ['chair', 100],
  ['bed', 10000],
];

// 配列ないの要素を指定して書き換え
// $array[1][1] = 500;

// array_shift($array); 配列ないの先頭の要素を削除
// array_pop($array); 配列ないの末尾の要素を削除
// array_splice($array, 1, 1); 本来は指定した位置の要素を削除してデータを挿入する際に使用
// 第一引数でtable,chair,bed等のデータが入っている$arrayを指定
// 第二引数で開始する要素(0から数える)を指定
// 第三引数で連続して削除する要素数を指定(1から数える)
// 第四引数で置き換えるデータの内容を指定する(以下使い方)
// (例) array_splice($array, 1, 1,['reprace']); となる

// $valは配列の中の要素
foreach ($array as $val) {
  echo "{$val[0]}は{$val[1]}円です。";
  // print_r($val);
}
