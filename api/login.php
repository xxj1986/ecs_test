<?php

$user_mobile = isset($_REQUEST['user_mobile'])?trim($_REQUEST['user_mobile']):'';
$password = isset($_REQUEST['password'])?trim($_REQUEST['password']):'';
$device = isset($_REQUEST['device'])?trim($_REQUEST['device']):'';


if($user_mobile == '13811986573' && $password == '123456'){

    $out = [
        'errcode' => 0,
        'message' => '登录成功',
        'token' =>  md5(microtime())
    ];
}else{
    $out = [
        'errcode' => 1,
        'message' => '手机号后密码错误',
        'token' =>  ''
    ];
}
die(json_encode($out));
