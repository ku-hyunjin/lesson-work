<?php
class Message 
{
    public function text(): string
    {
    return 'メッセージです。';
    }
}

class WelcomeMessage extends Message
{
    public function text(): string
    {
    return 'ようこそ！';
    }
}

$message = new WelcomeMessage();
echo $message->text();


