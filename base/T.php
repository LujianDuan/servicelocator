<?php
namespace lujian\base;

/**
 * @link https://lujianduan.github.io/
 * @copyright Copyright (c) 2017 ServiceLocal LLC
 * @author LujianDuan <379167658@qq.com>
 */

use lujian\di\ServiceLocator;

class T extends ServiceLocator
{
    public static $app;

    public function __construct($config = [])
    {
        self::$app = $this;
        Base::configure($this, $config);
    }
}