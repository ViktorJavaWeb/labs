<?php
class Computer
{
    protected $cpu;
    protected $ram;
    protected $video;
    protected $memory;
    protected $computerName = 'computer';
    protected $computer;
    protected $boole;

    private  $isWorking = null;


    function action()
    {
        return __CLASS__;
    }

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


    public function printParameters()
    {
        echo '$cpu - ' . $this->cpu . '<br>';
        echo '$ram - ' . $this->ram . '<br>';
        echo '$video - ' . $this->video . '<br>';
        echo '$memory - ' . $this->memory . '<br>';
        echo '$computerName - ' . $this->computerName . '<br>';
    }

    public function identUser($computer)
    {
        if($this->action() == $computer){
            echo 'Hello user computer ' . $this->action() . '<br>';
        }
    }
}

/*
•	Student should create into Computer class method identifyUser() allowed from any classes. This method should print message ‘Computer : Identify by login and password’;
•	Student should move constant IS_DESKTOP from class Computer to children classes
•	Student should setup Computer class properties using children classes constructors


*/


