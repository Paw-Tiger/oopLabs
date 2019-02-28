<?php

class MacBook extends Computer {
    const IS_DESKTOP = true;

    public function identifyUser(){
        echo " MacBook: Identify by Apple ID";
    }
}