<?php

require_once "vendor/autoload.php";

try {
    $bot = new \TelegramBot\Api\Client('237071178:AAFpXWKXM2K5MQZwNYmkWAFP6G1bq3KQeEw');
    $bot->command('start', function ($message) use ($bot) {

        $bot->sendMessage($message->getChat()->getId(), "Start!");
    });
    $bot->command('stop', function ($message) use ($bot) {
        $bot->sendMessage($message->getChat()->getId(), "Stop!");
    });
    $bot->run();
} catch (\TelegramBot\Api\Exception $e) {
    $e->getMessage();
}