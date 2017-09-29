<?php
$access_token = 'QQglWPoKej/thrBm6LDtnLv+prU4pykqpjjKECgd3MCPEkHjX7Cid//4XCBg5Jhe/D8pTNCNVUF9SrR+tOaIw5nGXOlg9xk7n7PkVNB9dNT4RQrVOG1OLj2Pm/M8dOvKTY5LQqmF5MvCXndB5wseUQdB04t89/1O/w1cDnyilFU=
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
