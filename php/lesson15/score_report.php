<?php
//合計: 400
//平均: 80
//最高点: 95
$scores = [72, 88, 95, 64, 81];
$total = 0;
$max = $scores[0];

foreach ($scores as $score) {
    $total += $score; 

    if ($score > $max) {
        $max = $score;
    }

}

$average = $total / count($scores);

echo "合計: " . $total . PHP_EOL;
echo "平均: " . $average . PHP_EOL;
echo "最高点: " . $max . PHP_EOL;
