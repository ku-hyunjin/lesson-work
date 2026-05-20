<?php
class User
{
    public string $name = "Taro";

    public function greet(): string 
    {
        return "おはようございます！{$this->name}さん!";
    }
}

$user = new User();
$user->name = "Taro";
echo $user->greet();
