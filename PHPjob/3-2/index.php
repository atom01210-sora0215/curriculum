<?php
//step1:フルーツと単価の連想配列を作成してください。
$fruits = ["りんご" =>100, "みかん" => 50, "もも" => 300];
//配列の0:リンゴ、1:みかん、2:桃の順に個数を配列で作成してください。
$num = [3, 3, 10];


// step2:単価を計算する関数を定義してください。引数はフルーツの単価・個数の２つ、返り値は計算した合計値を返します。
function get_price($unitprice, $quantity){
    return $unitprice * $quantity;
}

//初期化
$i = 0;
//step3:繰り返しを使ってそれぞれのフルーツを書き出してください。
foreach ($fruits as $key => $value) {
    $total = get_price($value, $num[$i]);
    echo "{$key}は{$total}円です。<br>";
    //変化式
    $i++;
}
