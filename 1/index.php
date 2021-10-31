<?php
use Test as r;
use testdir\Test;

$dirRoot = "/home/Project/PHP/test";

set_include_path(get_include_path() . PATH_SEPARATOR . $dirRoot);

echo get_include_path();

spl_autoload_register();

$test = new r();
$test1 = new Test;

$test->testEcho();
$test1->testEcho();