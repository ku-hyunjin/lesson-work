<?php
class Product
{
    public $name;
    public $price;
    public $amount;

    public function isAvailable() //boolean
    {
        return $this->amount > 0;
    }


    public function cardText() : string
    {
        $stockText = $this->isAvailable() ? "在庫あり" : "在庫なし"; 
        // 初めて if-else の省略形 「？　：　」　を使いました。

        $text = "{$this->name} / {$this->price}円 / {$stockText}";

        if (!$this->isAvailable()) {
            $text = "[SOLD OUT] " . $text;
        }

        return $text;
    }
}


$p1 = new Product();
$p1->name = "Pen";
$p1->price = 120;
$p1->amount = 12;

$p2 = new Product();
$p2->name = "Notebook";
$p2->price = 260;
$p2->amount = 0;

$p3 = new Product();
$p3->name = "Bag";
$p3->price = 2800;
$p3->amount = 3;

$products =[$p1, $p2, $p3];

foreach ($products as $product) {
    echo $product->cardText() . PHP_EOL;
}
