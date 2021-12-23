<?php
$array = [
  'name' => 'Bob',
  'age' => 12,
  // 配列ないに再度配列を入れることも可能
  'sport' => ['baseball', 'swimming']
];
// 連想配列では、 array_popやarray_shiftは使用しない。
// かわりに unset($配列名['キー'])とすることで削除することができる。
unset($array['name']);

// $array変数ないの'name'属性に関連づけられているデータ(Bob)を呼び出す。
echo $array['name'];

// 配列要素を指定してデータの書き換え
$array['age'] = 21;
echo $array['age'];
echo $array['sport'][1];

// 連想配列とは $変数名 = [
// 'キー' => '値',
// 'キー' => '値',
// 'キー' => '値',
// ]
// とすることでキーに関連づけて値をセットすることができる。