<?php
// Shipping Fee Caculation
function calculateShippingFee(int $orderAmount, $isMember): int
{
    if ($orderAmount >= 5000) {
        return 0;
    }
    elseif ($isMember) {
        return 300;
    }
    else {
        return 600;
    }

}

//Shipping Fee Message
function buildShippingMessage ($orderAmount, $isMember) : string
{
    $fee = calculateShippingFee($orderAmount, $isMember);

    if ($isMember) {
        $memberText = "はい";
        } else{
            $memberText = "いいえ";
        }
    
        return "注文金額: {$orderAmount}円" . PHP_EOL
                . "会員: {$memberText}" . PHP_EOL
                . "送料: {$fee}円" . PHP_EOL;
}

echo buildShippingMessage(4200, true);
