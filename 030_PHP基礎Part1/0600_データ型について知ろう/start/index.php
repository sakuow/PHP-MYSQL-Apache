<?php
// データ型とは
$i = 1;
// PHPはbool方は大文字小文字どちらも可
$b = true;
$str = 'hello';
// データの確認方法 var_dump
var_dump($i);
var_dump($str);
var_dump($b);

// 異なる方は自動的に変換される。
echo $i + $b;


// (データ型)を記述することで手動で変換することもできる。
echo $i + (int) $b;

// 型の取り扱いの注意点
var_dump($i === '1');
