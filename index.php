<?php

require_once "vendor/autoload.php";
use \TelegramBot\Api\Client;

try {
    //$bot = new \TelegramBot\Api\Client('237071178:AAFpXWKXM2K5MQZwNYmkWAFP6G1bq3KQeEw');
    $bot = new Client('237071178:AAFpXWKXM2K5MQZwNYmkWAFP6G1bq3KQeEw');

    $bot->command("info", function ($message) use ($bot){

        $bot->sendMessage($message->getChat()->getId(), $bot->getMe()->getFirstName());
    });

    $bot->command("start", function ($message) use ($bot){


        $replyMarkup = new TelegramBot\Api\Types\ReplyKeyboardMarkup(["Yes"]);
        $bot->sendMessage(
            $message->getChat()->getId(),
            "Кому шаурмы?",
            $parseMode = null,
            $disablePreview = false,
            $replyToMessageId = null,
            $replyMarkup,
            $disableNotification = false);
    });


    $bot->run();
} catch (\TelegramBot\Api\Exception $e) {
    $e->getMessage();
}

