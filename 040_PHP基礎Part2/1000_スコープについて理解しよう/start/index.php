<?php

/**
 * スコープについて
 * 変数が参照可能な範囲
 */
// グローバルスコープ
$a = 0;
echo $a;

// ローカルスコープ
function fn1()
{
  $b = 1;
}

function fn2()
{
  // global $変数名とすることでfunction内でグローバル変数を再度定義し使用できるようになる。
  global $a;
  $b = 2;
  echo $a;
}

// スーパーグローバル
function fn2()
{
  global $a;
  // PHP内で
  var_dump($_SERVER);
  // $b = 2;
  // echo $a;
}

fn2();
