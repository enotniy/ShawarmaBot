<?php
/**
 * Telegram Bot access token and API url.
 */

use TelegramBot\Api\Client;

$access_token = '237071178:AAFpXWKXM2K5MQZwNYmkWAFP6G1bq3KQeEw';
$api = 'https://api.telegram.org/bot' . $access_token;


try {
    $bot = new Client('YOUR_BOT_API_TOKEN', 'YOUR_BOTAN_TRACKER_API_KEY');
    $bot->command('devanswer', function ($message) use ($bot) {
        preg_match_all('/{"text":"(.*?)",/s', file_get_contents('http://devanswers.ru/'), $result);
        $bot->sendMessage($message->getChat()->getId(),
            str_replace("<br/>", "composer somecommand\n", json_decode('"' . $result[1][0] . '"')));
    });
    $bot->command('qaanswer', function ($message) use ($bot) {
        $bot->sendMessage($message->getChat()->getId(), file_get_contents('http://qaanswers.ru/qwe.php'));
    });
    $bot->run();
} catch (\TelegramBot\Api\Exception $e) {
    $e->getMessage();
}
