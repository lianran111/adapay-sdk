<?php
/**
 * AdaPay SDK 商户开户和进件
 * Date: 2019/09/05 18:05
 */

namespace AdaPayMerchant;

use AdaPay\AdaPay;

class MerchantApp extends AdaPay
{
    public $endpoint = "/v1/batchEntrys/application";

    public function __construct()
    {
        parent::__construct();
    }

    //商户应用创建
    public function create($params = [])
    {
        $request_params = $params;
        $req_url        = $this->gateWayUrl . $this->endpoint;
        $header         = $this->get_request_header($req_url, $request_params, self::$header);
        $this->result   = $this->ada_request->curl_request($req_url, $request_params, $header, $is_json = true);
    }

    //商户应用查询
    public function query($params = [])
    {
        $request_params = $params;
        $req_url        = $this->gateWayUrl . $this->endpoint;
        $header         = $this->get_request_header($req_url, http_build_query($request_params), self::$headerText);
        $this->result   = $this->ada_request->curl_request($req_url . '?' . http_build_query($request_params), '', $header, false);
    }
}
