<?php
namespace application;

class MacBook extends Computer implements IComputer {
    const IS_DESKTOP = true;

    public function identifyUser(){
        echo \helpers\Message::printLine('MacBook: Identify by Apple ID',\helpers\Message::$note);
    }
}