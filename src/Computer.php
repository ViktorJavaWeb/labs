<?php

class Computer
{
    const IS_DESKTOP = null;
    public $cpu;
    public $ram;
    public $video;
    public $memory;
    public $boole = 'on';

    public function start()
    {
        $this->boole = 'on';
        echo PHP_EOL  . "Hello!! Welcome user." . PHP_EOL . "current statement - " . $this->boole . PHP_EOL;
    }

    public function shutdown()
    {
        $this->boole = 'off';
        echo PHP_EOL  . " Good buy! user." . PHP_EOL . "current statement - ". $this->boole;
    }

    public function restart()
    {
        if ($this->boole == 'on') {
            $this->shutdown();
            $this->start();
            $t = 0;
            while ($t < 5) {
                $t++;
                sleep(1);
                echo ' . ';
            }
        }

    }
}