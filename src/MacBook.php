<?php
/**
 * Created by IntelliJ IDEA.
 * User: AL
 * Date: 17.05.2018
 * Time: 21:16
 */

class MacBook
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