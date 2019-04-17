<?php


$access_token = '+dvNwcWDqGTzRIhgzrug9C02lvhu0sGfkLmjz7lrJhyIovGklcSpeSJA5tEK6U6t0Lu/knJ+KpVT5k4phhlGzETlQazimpXzQchHjrxfRG9aUc9mXrbf369EdB8qaEk+4aBsMkJnpDx64pq65/i4awdB04t89/1O/w1cDnyilFU=';

$userId = 'Ua3566118a5ec58b42cdc76c10e11c18b';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

