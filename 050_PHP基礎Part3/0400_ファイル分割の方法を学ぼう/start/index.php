<?php

/**
 * ファイル分割の方法を学ぼう
 * 
 * - require、includeの違い
 * requireは読み込むファイルが見当たらない場合、その処理を行う時点でエラーが発生し、後続の処理を行わない。
 * includeはエラーが発生するが、後続の処理を行う。
 * - require、require_onceの使い方
 */
$arry = [
    'num' => 0
];

include('file.php');
// require('file1.php');
// require('file1.php');
// require_once('file2.php');
// require_once('file2.php');
// require_once('file2.php');
fn1();
echo $arry['num'];
