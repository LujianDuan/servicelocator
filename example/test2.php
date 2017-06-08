<?php
use lujian\T;

include '../../../autoload.php';
T::set('person', [
    'class' => 'lujian\demo\Person',
    'name' => '张三',
    'age' => 23,
    'sex' => 'male',
]);
//var_dump(T::has('person'));
//T::clear('person');
var_dump(T::get('person'));

