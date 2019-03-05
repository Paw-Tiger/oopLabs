<?php
//
//require_once('./IComputer.php');
//require_once('./Computer.php');
//require_once('./Asus.php');
//require_once('./Lenovo.php');
//require_once('./MacBook.php');
//require_once('./Message.php');
//

require_once(__DIR__ . '/Autoload.php');
spl_autoload_register(['Autoload', 'loader']);

$mac = new application\MacBook();
$assus = new application\Asus();

try {
//
//    $mac->start();
//    $mac->restart();
    $mac->identifyUser();
    $assus->identifyUser();
////    $computer->restart();
} catch (Exception $e) {
    echo $e->getMessage() . $e->getFile();
}


?>