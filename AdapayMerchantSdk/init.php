<?php
define("SDK_BASE1", dirname(__FILE__));
define("ADAPAY_CORE1", SDK_BASE . "/../AdapayCore");
//define("SDK_VERSION", "v1.1.2");
//define("GATE_WAY_URL", "https://%s.adapay.tech");
//define("DEBUG", true);
//define("LOG", dirname(SDK_BASE) . "/log/prod");
//define("ENV", "prod");

include_once ADAPAY_CORE1 . "/AdaPay.php";
include_once ADAPAY_CORE1 . "/AdaLoader.php";

include_once SDK_BASE1 . "/MerchantConf.php";
include_once SDK_BASE1 . "/MerchantUser.php";
include_once SDK_BASE1 . "/MerchantProfile.php";
include_once SDK_BASE1 . "/MerchantApp.php";
