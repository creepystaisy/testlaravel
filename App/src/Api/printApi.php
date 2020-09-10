<?php
/*$client = new GuzzleHttp\Client();
$response = $client->request('POST', 'https://stcorp.bitrix24.ru/rest/1/pmbrly0dp34srypl/profile/', [
    'form_params' => [
       'id' => '55555555'
        // 'field_name' => 'abc',
       // 'other_field' => '123',
        //'nested_field' => [
        //    'nested' => 'hello'
       // ]
    ]
]);*/
use GuzzleHttp\Client;

$client = new GuzzleHttp\Client();
$res = $client->request('GET', 'https://api.github.com/user', [
    'auth' => ['user', 'pass']
]);
echo $res->getStatusCode();
// "200"
echo $res->getHeader('content-type')[0];
// 'application/json; charset=utf8'
echo $res->getBody();