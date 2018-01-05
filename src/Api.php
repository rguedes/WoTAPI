<?php
/**
 * Created by PhpStorm.
 * User: ErgoZ
 * Date: 30.01.2015
 * Time: 12:42
 */

namespace RiftBit\WoTAPI;


class Api {

    private $_application_id = 'demo';
    private $_application_region = 'ru';
    private $_application_language = 'ru';
    private $_base_wot_api_url = 'http://api.worldoftanks.%s/';

    public function __construct($application_id, $region, $language)
    {
        $this->_application_id = $application_id;
        $this->_application_region = $region;
        $this->_base_wot_api_url = sprintf($this->_base_wot_api_url, $region);
        $this->_application_language = $language;
    }

    public function accountList($search, $fields="", $type="", $limit="")
    {
        return lib\api\Account::acc_list($this->_application_id, $this->_base_wot_api_url, $this->_application_language, $fields, $type, $search, $limit);
    }

    public function accountInfo($account_id, $fields="", $access_token="")
    {
        return lib\api\Account::acc_info($this->_application_id, $this->_base_wot_api_url, $this->_application_language, $fields, $access_token, $account_id);
    }

    public function accountTanks($account_id, $tank_id="", $fields="", $access_token="")
    {
        return lib\api\Account::acc_tanks($this->_application_id, $this->_base_wot_api_url, $this->_application_language, $fields, $access_token, $account_id, $tank_id);
    }

    public function accountAchievements($account_id, $fields="", $access_token="")
    {
        return lib\api\Account::acc_achievements($this->_application_id, $this->_base_wot_api_url, $this->_application_language, $fields, $access_token, $account_id);
    }

    public function clanList($search, $fields="", $limit="", $order_by="", $page_no="")
    {
        return lib\api\Clan::clan_list($this->_application_id, $this->_base_wot_api_url, $this->_application_language, $fields, $search, $limit, $order_by, $page_no);
    }

    public function clanInfo($clan_id, $fields="", $access_token="")
    {
        return lib\api\Clan::clan_info($this->_application_id, $this->_base_wot_api_url, $this->_application_language, $fields, $access_token, $clan_id);
    }

    public function tanksStats($account_id, $tank_id="", $access_token="", $fields="", $extra="", $in_garage=""){
        return lib\api\Tanks::tanks_stats($this->_application_id, $this->_base_wot_api_url, $this->_application_language, $account_id, $tank_id, $access_token, $fields, $extra, $in_garage );
    }

    public function encyclopediaVehicles($fields="", $tier="", $nation="", $type="",  $tank_id="", $page_no=1, $limit=100){
        return lib\api\Encyclopedia::vehicles($this->_application_id, $this->_base_wot_api_url, $this->_application_language, $fields, $limit, $nation, $page_no, $tier, $type, $tank_id);
    }

}