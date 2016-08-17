<?php
/**
 * Created by PhpStorm.
 * User: zhudong
 * Date: 16/8/11
 * Time: 下午4:26
 */
include "Newspaper.php";
include "Reader.php";
class WorkFlow {
    public function run() {
        $newspaper = new Newspaper('New York Times');

        $allen = new Reader("allen");
        $jimmy = new Reader("jimmy");
        $tom = new Reader("tom");

        $newspaper->attach($allen);
        $newspaper->attach($jimmy);
        $newspaper->attach($tom);

        $newspaper->detach($tom);

        $newspaper->breakOutNews('USA BREAK DOWN');
    }
}

$work = new WorkFlow();
$work->run();