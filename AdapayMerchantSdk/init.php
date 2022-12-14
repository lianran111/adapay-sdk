<?php
if (!defined('SDK_BASE')) {
    define("SDK_BASE", dirname(__FILE__));
}

if (!defined('ADAPAY_CORE')) {
    define("ADAPAY_CORE", SDK_BASE . "/../AdapayCore");
}

//define("SDK_VERSION", "v1.1.2");
//define("GATE_WAY_URL", "https://%s.adapay.tech");
//define("DEBUG", true);
//define("LOG", dirname(SDK_BASE) . "/log/prod");
//define("ENV", "prod");

include ADAPAY_CORE . "/AdaPay.php";
include ADAPAY_CORE . "/AdaLoader.php";

include SDK_BASE . "/MerchantConf.php";
include SDK_BASE . "/MerchantUser.php";
include SDK_BASE . "/MerchantProfile.php";
include SDK_BASE . "/MerchantApp.php";
