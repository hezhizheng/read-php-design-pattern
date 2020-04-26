<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/19
 * Time: 2:09
 * Created by PhpStorm.
 */

// run: php ChainOfResponsibility/test.php

require_once(dirname(__DIR__) . '/autoload.php');

use ChainOfResponsibility\HandlerAccessToken;
use ChainOfResponsibility\HandlerArguments;
use ChainOfResponsibility\HandlerAuthority;
use ChainOfResponsibility\HandlerFrequent;
use ChainOfResponsibility\HandlerSign;
use ChainOfResponsibility\Request;

$request = new Request();

$request->request_id = uniqid();

$accessToken = new HandlerAccessToken();

$accessToken->setNext(new HandlerSign())
    ->setNext(new HandlerFrequent())
    ->setNext(new HandlerAuthority())
    ->setNext(new HandlerArguments())
    ->start($request);