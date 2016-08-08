<?php

require_once "vendor/autoload.php";
use \TelegramBot\Api\Client;

try {
    //$bot = new \TelegramBot\Api\Client('237071178:AAFpXWKXM2K5MQZwNYmkWAFP6G1bq3KQeEw');
    $bot = new Client('237071178:AAFpXWKXM2K5MQZwNYmkWAFP6G1bq3KQeEw');

    $bot->inlineQuery(function (\TelegramBot\Api\Types\Inline\InlineQuery $inlineQuery) use ($bot) {
        /* @var \TelegramBot\Api\BotApi $bot */

        $var = $inlineQuery->getQuery();
        
        $bot->sendMessage($inlineQuery->getId(), $var);
    });

    $bot->run();
} catch (\TelegramBot\Api\Exception $e) {
    $e->getMessage();
}

