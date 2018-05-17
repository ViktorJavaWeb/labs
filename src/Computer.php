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
        echo 'Hello!! Welcome user.  <br> current statement - ' . $this->boole . '<br>';

    }

    public function shutdown()
    {
        $this->boole = 'off';
        echo '<br> Good buy! user. <br> current statement - ' . $this->boole . '<br>';

    }

    public function restart()
    {
        $t = 0;
        while ($t < 5){
            $t++;
            sleep(1);
            echo ' . ';
        }
    }
}

