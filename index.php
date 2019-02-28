<?php

require_once ('./Computer.php');
require_once ('./Asus.php');
require_once ('./Lenovo.php');
require_once ('./MacBook.php');


$mac = new MacBook();
//
try {
//
//    $mac->start();
//    $mac->restart();
    $mac->identifyUser();
////    $computer->restart();
}catch (Exception $e){
    echo $e->getMessage().$e->getFile();
}


?>