<?php
function calc($n,$m){
    $x = $n + $m;
    // 配列に分解させる。（1文字ずつ）
    $array = str_split((string)$x);
    // 配列の順番を後ろから１番にする。(逆向き）
    $array = array_reverse($array);
//    最初の文字が0であれば、削除するを繰り返す。 001
    while (count($array) > 1 && $array[0] == '0') {
        // array_shiftは配列の先頭の要素を1つ削除する関数
        array_shift($array);
    }
    return (int)implode('', $array);
}

list($x,$y) = explode(' ', trim(fgets(STDIN)));
$array = [(int)$x,(int)$y];
$first = 0;
$second = 1;

while(count($array) < 10){
    $array[] = calc($array[$first],$array[$second]);
    $first++;
    $second++;
}

echo $array[9];


//別パターンで
function calc_simple($n, $m) {
    // 1. nとmを足す
    $x = $n + $m;

    // 2. 結果を文字列にして、strrevで逆順にする
    $reversed_str = strrev((string)$x);

    // 3. 整数に変換する（この時点で先頭の0は自動的に消える）
    $result_int = (int)$reversed_str;

    return $result_int;
}

// 実行例
echo calc_simple(24, 76); // 24+76=100 → "100" → "001" → 1
echo calc_simple(1, 19);