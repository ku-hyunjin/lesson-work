<?php
// 在庫アラート
// Notebook: 4個
// Eraser: 2個
//対象件数: 2件
$products =[
    ["name" => "Pen", "stock" => 12],
    ["name" => "Notebook", "stock" => 4],
    ["name" => "Eraser", "stock" => 2],
    ["name" => "Bag", "stock" => 8]
];

function isLowStock($stock)
{
    return $stock <= 5;
}

echo "在庫アラート" . PHP_EOL;

$count = 0;

foreach ($products as $product) {
    if (isLowStock($product["stock"])) {
        echo $product["name"] . ": " . $product["stock"] . "個" . PHP_EOL;
        $count ++; //1件ずつ増加
    }
}

echo "対象件数: " . $count . "件" . PHP_EOL;
