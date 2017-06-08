<?php
namespace lujian\demo;

/**
 * @link https://lujianduan.github.io/
 * @copyright Copyright (c) 2017 ServiceLocal LLC
 * @author LujianDuan <379167658@qq.com>
 */

use lujian\base\Component;
use lujian\di\Container;

class Person extends Component
{
    public $name;
    public $age;
    public $sex;
    public $container;

    public function __construct(Container $container, $config = [])
    {
        parent::__construct($config);
        $this->container = $container;
    }

    public function say()
    {
        echo 'Hello,every one!My name is ' . $this->name . '. I am ' . $this->age . '. My sex is  ' . $this->sex . '.';
        echo '<br>';
        var_dump($this->container);
    }
}