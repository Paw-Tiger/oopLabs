<?php
namespace application;

class Asus extends Computer implements IComputer {

    const IS_DESKTOP = true;

    public function identifyUser(){
        echo \helpers\Message::printLine('Asus: Identify by  password',\helpers\Message::$warning);
    }
}