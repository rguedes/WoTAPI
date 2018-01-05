<?php
/**
 * Created by PhpStorm.
 * User: ErgoZ
 * Date: 30.01.2015
 * Time: 13:32
 */

namespace RiftBit\WoTAPI\lib\api;
use RiftBit\WoTAPI\lib\tools\Request;

class Encyclopedia {

    public static function vehicles($application_id, $api_url, $language, $limit, $nation, $page_no, $tier, $type, $tank_id)
    {
        $request_params = [
            'application_id' => $application_id,
            'language' => $language,
            'limit' => $limit,
            'nation' => $nation,
            'tank_id' => $tank_id,
            'page_no' => $page_no,
            'tier' => $tier,
            'type' => $type
        ];
        return Request::send($api_url."wot/encyclopedia/vehicles/", $request_params);
    }

}