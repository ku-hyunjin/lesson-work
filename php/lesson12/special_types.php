<?php
// NULLの判定
$name = null;
var_dump($name);


// is_callable() の確認
function greeting ()
{
    return 'おはようございます〜';
}
var_dump(is_callable('greeting'));


//一時的なメモリ領域を開く処理
$fp = fopen('php://memory', 'r+');
var_dump($fp);
fclose($fp);

