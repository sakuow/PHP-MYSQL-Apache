<?php
/**
 * プログラムの注意すべき記述順について
 * 
 * 関数ないの処理は関数が実行されて初めて動く
 * 関数宣言はプログラムの実行よりも前に準備される
 * それ以外は上から順に実行される
 */

 function counter($step = 1) {
   global $num;
   $num += $step;
   echo $num;
   returen $num;
 }

 $num = 0;
// counter関数が実行されているのは $numが定義された後になっている。
 counter(2);