<?php
/**
 * Created by PhpStorm.
 * User: ErgoZ
 * Date: 30.01.2015
 * Time: 13:32
 */

namespace RiftBit\WoTAPI\lib\api;
use RiftBit\WoTAPI\lib\tools\Request;

class Account {

    /**
     * @param $application_id
     * @param $api_url
     * @param $language
     * @param $fields
     * @param string $type exact or startswith
     * @param $search
     * @param $limit
     * @return mixed
     */
    public static function acc_list($application_id, $api_url, $language, $fields, $type="exact", $search, $limit)
    {
        $request_params = [
            'application_id' => $application_id,
            'language' => $language,
            'fields' => $fields,
            'type' => $type,
            'search' => $search,
            'limit'=> $limit
        ];
        return Request::send($api_url."wot/account/list/", $request_params);
    }



    public static function acc_info($application_id, $api_url, $language, $fields, $access_token, $account_id)
    {
        $request_params = [
            'application_id' => $application_id,
            'language' => $language,
            'fields' => $fields,
            'access_token' => $access_token,
            'account_id' => $account_id
        ];
        return Request::send($api_url."wot/account/info/", $request_params);
    }

    public static function acc_tanks($application_id, $api_url, $language, $fields, $access_token, $account_id, $tank_id)
    {
        $request_params = [
            'application_id' => $application_id,
            'language' => $language,
            'fields' => $fields,
            'access_token' => $access_token,
            'account_id' => $account_id,
            'tank_id' => $tank_id
        ];
        return Request::send($api_url."wot/account/tanks/", $request_params);
    }

    public static function acc_achievements($application_id, $api_url, $language, $fields, $access_token, $account_id)
    {
        $request_params = [
            'application_id' => $application_id,
            'language' => $language,
            'fields' => $fields,
            'access_token' => $access_token,
            'account_id' => $account_id
        ];
        return Request::send($api_url."wot/account/achievements/", $request_params);
    }
}