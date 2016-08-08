<?php

require_once "vendor/autoload.php";
use \TelegramBot\Api\Client;

try {
    //$bot = new \TelegramBot\Api\Client('237071178:AAFpXWKXM2K5MQZwNYmkWAFP6G1bq3KQeEw');
    $bot = new Client('237071178:AAFpXWKXM2K5MQZwNYmkWAFP6G1bq3KQeEw');

    $bot->inlineQuery(function (\TelegramBot\Api\Types\Inline\InlineQuery $inlineQuery) use ($bot) {
        /* @var \TelegramBot\Api\BotApi $bot */


        $result = new TelegramBot\Api\Types\Inline\QueryResult\Photo(
            1,
            "http://2.bp.blogspot.com/-_1K702HuofI/Vb-2p8r73LI/AAAAAAAAR5s/UFxWoCZGTR8/s1600/Shawarma-Food-Pakistan.jpg",
            "http://2.bp.blogspot.com/-_1K702HuofI/Vb-2p8r73LI/AAAAAAAAR5s/UFxWoCZGTR8/s1600/Shawarma-Food-Pakistan.jpg");

        $bot->answerInlineQuery($inlineQuery->getId(), [$result], 0);
    });

    $bot->run();
} catch (\TelegramBot\Api\Exception $e) {
    $e->getMessage();
}

