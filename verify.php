<?php
$access_token = 'UxQb+WxoImk1z4ngkXiPjB6v1J2X0iN96C/z+63s/wCyHx+ffFZP6rDf105fdJRMt4C+JB3ekOPvmnch35CjDboQvtLlIplLwXk6RRjKZub6HbeR51m8RWDd3kSV9CNdG620Lf/thaMSXNR+jvujxAdB04t89/1O/w1cDnyilFU=
';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
