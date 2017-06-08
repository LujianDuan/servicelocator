<?php
use lujian\T;

include '../../../autoload.php';

$config = [
    'person' => [
        'class' => 'lujian\demo\Person',
        'name' => '张三',
        'age' => 23,
        'sex' => 'male',
    ]
];

T::setComponents($config);
var_dump(T::get('person'));