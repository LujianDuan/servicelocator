<?php
use lujian\T;

include '../../../autoload.php';

$config = [
    'components' => [
        'person' => [
            'class' => 'lujian\demo\Person',
            'name' => '张三',
            'age' => 23,
            'sex' => 'male',
        ]
    ]
];

$t = new T($config);
var_dump(T::$app->person);