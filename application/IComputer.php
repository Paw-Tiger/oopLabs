<?php
namespace application;

interface IComputer{
    public function start();
    public function shutDown();
    public function restart();
    public function printParameters();
    public function identifyUser();
}