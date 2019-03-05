<?php
namespace application;

class Lenovo extends Computer implements IComputer {
    const IS_DESKTOP = false;

    public function identifyUser(){
        echo \helpers\Message::printLine('Lenovo: Identify by fingerprints',\helpers\Message::$note);
    }
}