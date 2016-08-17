<?php
/**
 * Created by PhpStorm.
 * User: zhudong
 * Date: 16/8/11
 * Time: 下午3:45
 */
include "Ob.php";
class MyOb implements Ob {
    public function update(){
        echo get_class($this).PHP_EOL;
    }
}