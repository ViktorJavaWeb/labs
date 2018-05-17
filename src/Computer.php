<?php
class Computer
{
    protected $cpu;
    protected $ram;
    protected $video;
    protected $memory;
    protected $computerName = 'computer';
    public $computer;
    protected $boole;

    private  $isWorking = null;


    function action()
    {
        return __CLASS__;
    }

    public function start()
    {
        $this->boole = 'on';
        echo 'Hello!! Welcome user.  <br> current statement - ' . $this->boole . '<br>';
        if($this->boole == 'on'){
            $this->printParameters();
        }
    }

    public function shutdown()
    {

        if($this->boole == 'off'){
            echo 'ERROR';
        }else{
            $this->boole = 'off';
            echo '<br> Good buy! user. <br> current statement - ' . $this->boole . '<br>';
        }

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


