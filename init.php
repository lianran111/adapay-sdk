<?php
ini_set('date.timezone', 'Asia/Shanghai');
define("SDK_BASE", dirname(__FILE__));
define("ADAPAY_CORE", SDK_BASE . "/AdapayCore");
define("SDK_VERSION", "v1.4.3");
define("GATE_WAY_URL", "https://%s.adapay.tech");
define("DEBUG", true);
define("LOG", dirname(SDK_BASE) . "/adapay-sdk/log/prod");
define("ENV", "prod");

include_once ADAPAY_CORE . "/AdaPay.php";
include_once ADAPAY_CORE . "/AdaLoader.php";

# *辅助接口
include_once SDK_BASE . "/AdapaySdk/Utils/SDKTools.php";
# 工具类 AdapayTools
include_once SDK_BASE . "/AdapaySdk/AdapayTools.php";

# *聚合支付
# 支付对象
include_once SDK_BASE . "/AdapaySdk/Payment.php";
# 退款对象
include_once SDK_BASE . "/AdapaySdk/Refund.php";
# 支付确认对象
include_once SDK_BASE . "/AdapaySdk/PaymentConfirm.php";
# 支付撤销对象
include_once SDK_BASE . "/AdapaySdk/PaymentReverse.php";

# 个人用户
include_once SDK_BASE . "/AdapaySdk/Member.php";
# 个人用户实名
include_once SDK_BASE . "/AdapaySdk/AdaPayCommon.php";
# 企业用户
include_once SDK_BASE . "/AdapaySdk/CorpMember.php";
# 结算账户
include_once SDK_BASE . "/AdapaySdk/SettleAccount.php";

# * 钱包收银台
# 取现对象 Drawcash
include_once SDK_BASE . "/AdapaySdk/Drawcash.php";
# 账户对象 Account
include_once SDK_BASE . "/AdapaySdk/Account.php";
# 收银台对象 Checkout
include_once SDK_BASE . "/AdapaySdk/Checkout.php";
# 钱包 Wallet
include_once SDK_BASE . "/AdapaySdk/Wallet.php";

# 转账交易
include_once SDK_BASE . "/AdapaySdk/SettleAccountTransfer.php";
include_once SDK_BASE . "/AdapaySdk/SettleAccountCommissions.php";
# 冻结、解冻账号
include_once SDK_BASE . "/AdapaySdk/FreezeAccount.php";
include_once SDK_BASE . "/AdapaySdk/UnFreezeAccount.php";
# 快捷支付
include_once SDK_BASE . "/AdapaySdk/FastPay.php";
include_once SDK_BASE . "/AdapaySdk/FastPayCard.php";

# MerchantSdk
include_once SDK_BASE . "/AdapayMerchantSdk/MerchantConf.php";
include_once SDK_BASE . "/AdapayMerchantSdk/MerchantUser.php";
include_once SDK_BASE . "/AdapayMerchantSdk/MerchantRealname.php";
include_once SDK_BASE . "/AdapayMerchantSdk/MerchantProfile.php";
include_once SDK_BASE . "/AdapayMerchantSdk/MerchantApp.php";
