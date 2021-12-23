<?php
$array = ['太郎', '花子', 'jirou'];
// $array = array('太郎', '花子', 'jirou')でも可

// print_r($array);
// var_dump($array)でも可

// echo $array[1];
$array[1] = '幸子';
$array[] = '三郎';
// var_dump($array);
// echo $array[1];

for ($i = 0; $i < count($array); $i++) {
  echo '<div>', $array[$i], '</div>';
}

foreach ($array as $v) {
  echo '<div>', $v, '</div>';
}

// $i =>(矢印) $vとすることで配列番号を表示させることができる。
foreach ($array as $i => $s) {
  echo '<div>', $i, $v, '</div>';
}

echo '<div>', $array, '</div>';


/*
  14行目の count($array)とすることで、$arrayに代入された配列の中身を countを使うことで数えて条件に当てはめている。
  php内でhtmlのタグを使用する場合は、シングルクォーテーションで囲み、変数はカンマで区切る。
*/