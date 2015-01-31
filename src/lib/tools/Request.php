<?php
/**
 * Created by PhpStorm.
 * User: SMorozov
 * Date: 30.01.2015
 * Time: 14:02
 */

namespace riftbit\wotapi\lib\tools;
use GuzzleHttp\Client;

class Request {

    public static function send($url, array $params=[])
    {
        $client = new Client();
        $response = $client->post($url, ['body' => $params]);
        return $response;
    }

}