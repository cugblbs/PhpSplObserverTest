<?php
/**
 * Created by PhpStorm.
 * User: zhudong
 * Date: 16/8/11
 * Time: 下午4:02
 */
class Newspaper implements SplSubject {

    private $name;

    private $observers;

    private $content;

    public function __construct($name){
        $this->$name = $name;
        $this->observers = new SplObjectStorage();
    }

    public function attach(SplObserver $observer){
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer){
        $this->observers->detach($observer);
    }

    public function notify(){
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function getContent(){
        return $this->content."{$this->name}";
    }

    public function breakOutNews($content) {
        $this->content = $content;
        $this->notify();
    }
}