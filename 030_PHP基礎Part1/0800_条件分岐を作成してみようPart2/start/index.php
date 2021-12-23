<?php
// ==と===の違い
if (1 == '1') {
  echo 'true';
} else {
  echo 'false';
}

/*
 === は文字列を確認する。
 ==　は中身を確認するが、
 if (0 == '')の場合　true判定になってしまうので、

 var = ''
 if (0 == var)も trueとなってしまうため、エラーの原因になりやすい。

 if (0 === var)であれば、0(int)とvar(から文字)が違うため、正常に判定できる。

 等はfalsyな値
  " "(空文字)
  0 (数値、文字列)
  NULL
  FALSE
*/