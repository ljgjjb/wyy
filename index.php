<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]
/**
 * 作者QQ：79520***
 * QQ交流群：80117******
 * 删版权者死一户口本
 * 加入QQ群可获取最新版本
 */
// 定义应用目录
define('APP_PATH', __DIR__ . '/application/');
//加载安全防护文件
require_once APP_PATH.'common/360safe/360webscan.php';
// 加载框架引导文件
require __DIR__ . '/thinkphp/start.php';
