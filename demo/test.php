<?php
namespace lujian\demo;
/**
 * @link https://lujianduan.github.io/
 * @copyright Copyright (c) 2017 ServiceLocal LLC
 * @author LujianDuan <379167658@qq.com>
 */
/**
 * Created by PhpStorm.
 * User: query
 * Date: 2017/2/4
 * Time: 18:15
 * 服务定位器测试文件及使用实例(The Demo to use ServiceLocator)
 */
include '../vendor/autoload.php';
use lujian\base\T;

$config = require './config.php';

new T($config);
var_dump(T::$app->person);