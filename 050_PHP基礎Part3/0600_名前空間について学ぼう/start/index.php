<?php

// 名前空間について学ぼう
// 関数や定数、クラスが保存可能
// defineを使い定数を定義した場合は、名前空間に保存することはできない。

require_once 'lib.php';

use function lib\with_tax;
use const lib\TAX_RATE;

// 特定の名前空間の関数を呼び出す場合は、\(バックスラッシュ)名前空間名\関数名　というように指定する。
$price = lib\with_tax(1000, 0.08);
echo $price;

// 名前空間の関数のため、＼を使用し指定する。
echo lib\TAX_RATE;
