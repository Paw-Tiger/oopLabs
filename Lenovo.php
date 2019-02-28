<?php

class Lenovo extends Computer {
    const IS_DESKTOP = false;

    public function identifyUser(){
        echo " Lenovo: Identify by fingerprints";
    }
}