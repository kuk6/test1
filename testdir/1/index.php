<?php
    //use Test;
    use testdir\Test;
    // require "testdir//Test1.php";

    set_include_path(get_include_path() . PATH_SEPARATOR . __DIR__ . "/testdir");

    //require "testdir//Test1.php";

    echo get_include_path();

    spl_autoload_register();

    // var_dump(scandir("/home/Project/PHP/test"));


    // $test = new Test();
    $test1 = new Test;

    // $test->testEcho();
    $test1->testEcho();