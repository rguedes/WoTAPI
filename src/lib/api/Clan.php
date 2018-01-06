<?php
/**
 * Created by PhpStorm.
 * User: ErgoZ
 * Date: 30.01.2015
 * Time: 13:32
 */

namespace RiftBit\WoTAPI\lib\api;
use RiftBit\WoTAPI\lib\tools\Request;

class Clan {

    public static function clan_list($application_id, $api_url, $language, $fields, $search, $limit, $order_by, $page_no)
    {
        $request_params = [
            'application_id' => $application_id,
            'language' => $language,
            'fields' => $fields,
            'search' => $search,
            'limit'=> $limit,
            'order_by'=> $order_by,
            'page_no'=> $page_no
        ];
        return Request::send($api_url."wot/clan/list/", $request_params);
    }


    public static function clan_info($application_id, $api_url, $language, $fields, $access_token, $clan_id)
    {
        $request_params = [
            'application_id' => $application_id,
            'language' => $language,
            'fields' => $fields,
            'access_token' => $access_token,
            'clan_id' => $clan_id
        ];
        return Request::send($api_url."wgn/clan/info/", $request_params);
    }
}
