<?php
// ===============================================================
// AtCoder PHP用 標準入出力テンプレート
// ===============================================================

// ---------------------------------------------------------------
// << 標準入力 >>
// ---------------------------------------------------------------

// Case 1: 1行に1つの整数
// 入力例:
// 5
$n = (int)trim(fgets(STDIN));

// Case 2: 1行に1つの文字列
// 入力例:
// hello
$s = trim(fgets(STDIN));

// Case 3: 1行にスペース区切りの複数の整数
// 入力例:
// 10 20
list($a, $b) = array_map('intval', explode(' ', trim(fgets(STDIN))));

// Case 4: 1行にスペース区切りの整数配列
// 入力例:
// 1 2 3 4 5
$array = array_map('intval', explode(' ', trim(fgets(STDIN))));

// Case 5: 複数行の入力をまとめて配列に格納 (N行)
// 入力例:
// 3
// apple
// orange
// grape
$n = (int)trim(fgets(STDIN)); // 最初にデータ件数を読み込む
$lines = [];
for ($i = 0; $i < $n; $i++) {
    $lines[] = trim(fgets(STDIN));
}


// ===============================================================
// >> ここに問題の主たる処理を記述します <<
// (例: 読み込んだ値を使って計算など)
// ===============================================================

$sum_result = $a + $b; // Case 3 の例
$processed_array = array_map(fn($x) => $x * 2, $array); // Case 4 の例


// ---------------------------------------------------------------
// << 標準出力 >>
// ---------------------------------------------------------------

// MEMO:
// - echo は自動で改行しません。
// - PHP_EOL はOSに合わせた改行コードです。AtCoderではこれを使うのが安全です。

// Case A: 単一の数値や文字列を出力
// 出力例: 30
echo $sum_result . PHP_EOL;

// Case B: 配列の要素をスペース区切りで出力
// 出力例: 2 4 6 8 10
echo implode(' ', $processed_array) . PHP_EOL;

// Case C: 配列の要素を改行区切りで出力
// 出力例:
// 2
// 4
// 6
// 8
// 10
foreach ($processed_array as $value) {
    echo $value . PHP_EOL;
}
// もしくは implode でも可
// echo implode(PHP_EOL, $processed_array) . PHP_EOL;


// Case D: 'Yes' or 'No' のような判定結果を出力
$is_ok = true; // 仮の判定結果
if ($is_ok) {
    echo 'Yes' . PHP_EOL;
} else {
    echo 'No' . PHP_EOL;
}

// Case E: 小数点以下の桁数を指定して出力 (printf を使用)
// 出力例: 3.1415926535
$pi = M_PI;
printf("%.10f\n", $pi); // \n も改行として使えます

?>