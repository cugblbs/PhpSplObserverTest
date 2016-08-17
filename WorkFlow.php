<?php
/**
 * Created by PhpStorm.
 * User: zhudong
 * Date: 16/8/11
 * Time: 下午3:48
 */
include "Paper.php";
include "MyOb.php";
class WorkFlow {
    public function run() {
        $paper = new Paper();
        $paper->attach(new MyOb());
        $paper->notify();
    }
}

$workflow = new WorkFlow();
$workflow->run();