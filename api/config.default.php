<?php

/**
 * 
 * 配置文件
 */
header('Content-type: application/json');
header('Access-Control-Allow-Origin: *');
$config = array(
    'mysql' => array(
        'host' => '',
        'username' => '',
        'password' => '',
        'database' => ''
    ),
    'download_url_update_duration' => 5 * 60 * 60, // 下载链接有效期 (s)
    '123pan' => array(
        'authorization' => '' // 123云盘的身份令牌
    ),
    'smtp' => array(
        'smtp_host' => '', // SMTP服务器
        'smtp_username' => '', // SMTP账号
        'smtp_password' => '', // SMTP密码
        'smtp_secure' => 'ssl', // 连接加密方法
        'smtp_port' => 994, // SMTP端口
        'sendFrom' => '', // 发件人邮箱
        'sendFromName' => '无忧音乐网' // 发件人名称
    ),
    'authorization' => ''
);

function defaultGetData($key, $value)
{
    if (array_key_exists($key, $_POST)) {
        return addslashes($_POST[$key] == null ? $value : $_POST[$key]);
    } else {
        return addslashes($value);
    }
}
