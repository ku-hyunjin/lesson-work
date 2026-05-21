<?php
// 1. 1から30まで繰り返す
// 2. いちばん細かい条件を先に見る
// 3. 単体の条件を見る
// 4. どれでもなければ数字を表示する
for ($i = 1; $i <= 30; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo "FizzBuzz" . PHP_EOL;

    } elseif ($i % 3 === 0) {
        echo "Fizz" . PHP_EOL;

    } elseif ($i % 5 === 0) {
        echo "Buzz" . PHP_EOL;
        
    } else {
        echo $i . PHP_EOL;
    }
}


