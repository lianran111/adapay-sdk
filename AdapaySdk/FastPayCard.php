<?phpnamespace AdaPaySdk;use AdaPay\AdaPay;class FastPayCard extends AdaPay{    public $endpoint = "/v1/fast_card";    public function __construct()    {        $this->gateWayType = "page";        parent::__construct();    }    public function payConfirm($params = [])    {        $request_params = $params;        $request_params = $this->do_empty_data($request_params);        $req_url        = $this->gateWayUrl . $this->endpoint . "/confirm";        $header         = $this->get_request_header($req_url, $request_params, self::$header);        $this->result   = $this->ada_request->curl_request($req_url, $request_params, $header, $is_json = true);    }    public function cardBind($params = [])    {        $request_params = $params;        $request_params = $this->do_empty_data($request_params);        $req_url        = $this->gateWayUrl . $this->endpoint . '/apply';        $header         = $this->get_request_header($req_url, $request_params, self::$header);        $this->result   = $this->ada_request->curl_request($req_url, $request_params, $header, $is_json = true);    }    public function cardBindConfirm($params = [])    {        $request_params = $params;        $request_params = $this->do_empty_data($request_params);        $req_url        = $this->gateWayUrl . $this->endpoint . "/confirm";        $header         = $this->get_request_header($req_url, $request_params, self::$header);        $this->result   = $this->ada_request->curl_request($req_url, $request_params, $header, $is_json = true);    }    public function queryCardList($params = [])    {        ksort($params);        $request_params = $this->do_empty_data($params);        $req_url        = $this->gateWayUrl . $this->endpoint . "/list";        $header         = $this->get_request_header($req_url, http_build_query($request_params), self::$headerText);        $this->result   = $this->ada_request->curl_request($req_url . "?" . http_build_query($request_params), "", $header, false);    }}