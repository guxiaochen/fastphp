<?php
// 应用目录为当前目录
define('APP_PATH', __DIR__ . '/');

// 开启调试模式
define('APP_DEBUG', true);

// 加载框架文件
require(APP_PATH . 'fastphp/Fastphp.php');

// 加载配置文件
$config = require(APP_PATH . 'config/config.php');

/*
* 实例化框架类，调用run()方法
* 实例化接收config配置参数，并保存到对象属性
* run()方法调用类自身方法
*/
(new fastphp\Fastphp($config))->run();
