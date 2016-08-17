<?php
/**
 * Created by PhpStorm.
 * User: zhudong
 * Date: 16/8/11
 * Time: 下午3:39
 */
class Paper {
    private $_ob = array();

    public function attach(Ob $ob) {
        $this->_ob[] = $ob;
    }


    public function notify() {
        if(!empty($this->_ob)) {
            foreach ($this->_ob as $ob) {
                $ob->update();
            }
        }
    }
}