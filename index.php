<?php

require_once "vendor/autoload.php";
use \TelegramBot\Api\Client;

try {
    //$bot = new \TelegramBot\Api\Client('237071178:AAFpXWKXM2K5MQZwNYmkWAFP6G1bq3KQeEw');
    $bot = new Client('237071178:AAFpXWKXM2K5MQZwNYmkWAFP6G1bq3KQeEw');

    $bot->inlineQuery(function (\TelegramBot\Api\Types\Inline\InlineQuery $inlineQuery) use ($bot) {
        /* @var \TelegramBot\Api\BotApi $bot */

        $result = [];
        $url = 'http://diveinfestival.com/wp-content/uploads/2015/08/google-app-logo-1.jpg';
        $result[] = new \TelegramBot\Api\Types\Inline\QueryResult\Photo(
            hash("md5", $url), $url, $url, $url, 'image/jpeg'
        );

        $bot->answerInlineQuery($inlineQuery->getId(), $result);
    });

    $bot->run();
} catch (\TelegramBot\Api\Exception $e) {
    $e->getMessage();
}

