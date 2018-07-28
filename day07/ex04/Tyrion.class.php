<?php

class Tyrion {
    public function __construct() {
        $this->name = "Tyrion";
    }
    public function sleepWith ($obj) {
        if ($obj->name === 'Jaime')
            print("Not even if I'm drunk !" . PHP_EOL);
        else if ($obj->name === 'Cersei')
            print("Not even if I'm drunk !" . PHP_EOL);
        else
            print("Let's do this." . PHP_EOL);
    }
}
?>