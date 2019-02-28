<?php

class Computer
{

    private $CPU;
    private $RAM;
    private $Video;
    private $Memory;
    private $computerName;
    private $isWorking= false;

    public function setCpu($cpu){
        $this->CPU = $cpu;
    }

    public function setRam($ram){
        $this->RAM = $ram;
    }

    public function setVideo($video){
        $this->Video = $video;
    }

    public function setMemory($memory){
        $this->Memory = $memory;
    }

    public function setComputerName($computerName){
        $this->computerName = $computerName;
    }

    protected function start(){
        $this->isWorking= true;
    }
    protected function shutdown(){
        $this->isWorking= false;
    }
    protected function restart(){

        if($this->isWorking== true) {
            $this->isWorking= false;
            sleep(3);
            $this->isWorking= true;
        }else{
            throw new Exception('Компьютер выключен');
        }
    }
    public function printParameters(){
        if($this->isWorking){
            echo "CPU: ".$this->CPU
                ." RAM: ".$this->RAM
                ." Video: ".$this->Video
                ." Memory".$this->Memory;
        }
        else{
            throw new Exception('Компьютер выключен');
        }
    }

    public function identifyUser(){
        echo " Computer: Identify by login amd password";
    }
}