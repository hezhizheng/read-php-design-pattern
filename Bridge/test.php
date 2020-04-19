<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/19
 * Time: 23:32
 * Created by PhpStorm.
 */

require_once(dirname(__DIR__) . '/autoload.php');

use Bridge\CommonMsg;
use Bridge\SendMobile;
use Bridge\SendEmail;
use Bridge\SendSms;
use Bridge\UrgentMsg;

echo "========发送一条手机通知（普通的）到用户===============".PHP_EOL;
$mobile = new SendMobile();
$common = new CommonMsg($mobile);
$common->sendMsg('轻关易道', '大大');

echo "========发送一条手机通知（紧急的）到用户===============".PHP_EOL;
$urgent = new UrgentMsg($mobile);
$urgent->sendMsg('小池塘', '天津狗不理');

