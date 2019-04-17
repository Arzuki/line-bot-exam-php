<?php



require "vendor/autoload.php";

$access_token = '+dvNwcWDqGTzRIhgzrug9C02lvhu0sGfkLmjz7lrJhyIovGklcSpeSJA5tEK6U6t0Lu/knJ+KpVT5k4phhlGzETlQazimpXzQchHjrxfRG9aUc9mXrbf369EdB8qaEk+4aBsMkJnpDx64pq65/i4awdB04t89/1O/w1cDnyilFU=';

$channelSecret = '8491afca151b6112b91ad80b582274d5';

$pushID = 'Ua3566118a5ec58b42cdc76c10e11c18b';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







