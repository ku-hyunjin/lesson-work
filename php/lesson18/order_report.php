<?php
// 注文データ
$orders =[
    ["name" => "Taro", "price" => 1200, "quantity" => 2],
    ["name" => "Hanako", "price" => 800, "quantity" => 1],
    ["name" => "Ken", "price" => 800, "quantity" => 4],
];

//　1件の小計を計算
function calculateOrderTotal($order)
{
    return $order["price"] * $order["quantity"];
}

// ラベル判定
function orderLabel($total)
{
    return ($total >= 3000) ? "高額注文" : "通常注文";
    // if-else代わりに　「return ? :　」　を使いました。
}

//途中に保存する変数
$grandTotal = 0;


foreach ($orders as $order) {
    $total = calculateOrderTotal($order);
    $label = orderLabel($total);

    echo $order["name"] . ": " . $total . "円 / " . $label . PHP_EOL;

    $grandTotal += $total;
}


echo "合計金額: " . $grandTotal . "円" . PHP_EOL;


