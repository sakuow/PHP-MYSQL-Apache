<!-- 正規表現を使ってみよう！ -->
<!-- 正規表現とは文字列のパターンを表現するための方法 -->
<?php
$char = 'ZAabd1_sscc';
// 任意の文字列を指定するメソッド preg_match
// 第一引数に検索したい /文字列/ の形で指定
// 第二引数に検索する際に参照する文字列を指定(変数でも可)
// 第三引数に検索した文字列を代入する変数名を記述する
if (preg_match("/[a-zA-Z]{1,}/i", $char, $result)) {
  echo '検索成功';
  print_r($result);
} else {
  echo '検索失敗';
}


/**
 * よく使う表現
 * . 任意の一文字
 * * 0回以上の繰り返し
 * + 1回以上の繰り返し
 * {n} n回の繰り返し
 * [] 文字クラスの作成
 * [abc] aまたはbまたはc
 * [^abc] aまたはbまたはc以外
 * [0-9] 0~9まで
 * [a-z] a~zまで
 * $ 終端一致
 * ^ 先頭一致
 * \w 半角英数字とアンダースコア
 * \d 数値
 * \ エスケープ
 * () 文字列の抜き出し
 *  ^(キャレット)をつけると前方から検索
 * $をつけると後方から検索
 */