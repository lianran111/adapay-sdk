<?php
/**
 * AdaPay SDK 微信、支付宝申请实名认证跟查询实名认证
 * Date: 2019/09/05 18:05
 */

namespace AdaPayMerchant;

use AdaPay\AdaPay;

class MerchantRealname extends AdaPay
{
    public $endpoint    = "/v1/realname/apply";
    public $no_endpoint = "/v1/realname/query";

    public function __construct()
    {
        parent::__construct();
    }

    public function create($params = [])
    {
        $request_params = $params;
        $req_url        = $this->gateWayUrl . $this->endpoint;
        $header         = $this->get_request_header($req_url, $request_params, self::$header);
        $this->result   = $this->ada_request->curl_request($req_url, $request_params, $header, $is_json = true);
    }

    public function query($params = [])
    {
        $request_params = $params;
        $req_url        = $this->gateWayUrl . $this->no_endpoint;
        $header         = $this->get_request_header($req_url, http_build_query($request_params), self::$headerText);
        $this->result   = $this->ada_request->curl_request($req_url . '?' . http_build_query($request_params), '', $header, false);
    }
}
