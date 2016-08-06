<?php
/**
 * Telegram Bot access token and API url.
 */
$access_token = '237071178:AAFpXWKXM2K5MQZwNYmkWAFP6G1bq3KQeEw';
$api = 'https://api.telegram.org/bot' . $access_token;
/**
 * Listen commands, set chat ID and message.
 */
$output = json_decode(file_get_contents('php://input'), TRUE);
$chat_id = $output['message']['chat']['id'];
$message = $output['message']['text'];
/**
 * Set response.
 */
switch($message) {
    case '/start':
        sendMessage($chat_id, "Done!");
        break;
    default:
        sendMessage($chat_id, "Ups!");
        break;
}
/**
 * Function sendMessage().
 */
function sendMessage($chat_id, $message) {
    file_get_contents($GLOBALS['api'] . '/sendMessage?chat_id=' . $chat_id . '&text=' . urlencode($message));
}