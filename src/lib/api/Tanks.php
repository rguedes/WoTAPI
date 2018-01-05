<?php
/**
 * Created by PhpStorm.
 * User: ErgoZ
 * Date: 30.01.2015
 * Time: 13:32
 */

namespace RiftBit\WoTAPI\lib\api;
use RiftBit\WoTAPI\lib\tools\Request;

class Tanks {

    public static function tanks_stats($application_id, $api_url, $language, $account_id, $tank_id, $access_token, $fields, $extra, $in_garage)
    {
        $request_params = [
            'application_id' => $application_id,
            'language' => $language,
            'fields' => $fields,
            'extra' => $extra,
            'tank_id' => $tank_id,
            'in_garage' => $in_garage,
            'access_token' => $access_token,
            'account_id' => $account_id
        ];
        return Request::send($api_url."wot/tanks/stats/", $request_params);
    }

}