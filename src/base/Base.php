<?php
namespace lujian\base;
/**
 * @link https://lujianduan.github.io/
 * @copyright Copyright (c) 2017 ServiceLocal LLC
 * @author LujianDuan <379167658@qq.com>
 */
/**
 * Created by PhpStorm.
 * User: query
 * Date: 2017/2/6
 * Time: 9:42
 * @author Lujian Duan  <379167658@qq.com>
 */

use lujian\di\Container;

Base::$container = Base::$container instanceof Container ? Base::$container : new Container();

class Base
{
    public static $container;

    public static function configure($object, $properties)
    {
        foreach ($properties as $name => $value) {
            $object->$name = $value;
        }

        return $object;
    }

    public static function createObject($type, array $params = [])
    {
        if (is_string($type)) {
            return static::$container->get($type, $params);
        } elseif (is_array($type) && isset($type['class'])) {
            $class = $type['class'];
            unset($type['class']);
            return static::$container->get($class, $params, $type);
        } elseif (is_callable($type, true)) {
            return static::$container->invoke($type, $params);
        } elseif (is_array($type)) {
            throw new \Exception('Object configuration must be an array containing a "class" element.');
        } else {
            throw new \Exception('Unsupported configuration type: ' . gettype($type));
        }
    }
}