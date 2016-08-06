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

    $bot->inlineQuery(function (\TelegramBot\Api\Types\Inline\InlineQuery $inlineQuery) use ($bot) {
        /* @var \TelegramBot\Api\BotApi $bot */


        $result = new \TelegramBot\Api\Types\Inline\InputMessageContent\Text("start");

        $bot->answerInlineQuery($inlineQuery->getId(), $result, 0);
    });

    $bot->run();
} catch (\TelegramBot\Api\Exception $e) {
    $e->getMessage();
}