<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/21
 * Time: 10:45
 */
include_once "./Arr.php";
include_once "./Arrayable.php";
include_once "./Function.php";
include_once "./jsonable.php";
include_once "./Macroable.php";
include_once "./collection.php";
$a = collect([1, 2, 3])->avg();
var_dump($a);