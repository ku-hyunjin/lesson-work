<?php
class Member
{
    public $name;
    public $point;

    public function rank ()
    {
        if ($this->point >= 1000) {
        return "Gold";
    } elseif ($this->point >= 500) {
        return "Silver";
    } else {
        return "bronze";
    }

    }


    public function profile ()
    {
        return $this->name . ": " . $this->rank();
    }
}


$Taro = new Member();
$Taro->name = "Taro";
$Taro->point = 1200;

$Hanako = new Member();
$Hanako->name = "Hanako";
$Hanako->point = 700;

$Ken = new Member();
$Ken->name = "Ken";
$Ken->point = 300;


echo $Taro->profile() . PHP_EOL;
echo $Hanako->profile() . PHP_EOL;
echo $Ken->profile() . PHP_EOL;