<?php

class Jaime {
    public function __construct() {
        $this->name = "Jaime";
    }
    public function sleepWith ($obj) {
        if ($obj->name === 'Cersei')
            print("With pleasure, but only in a tower in Winterfell, then." . PHP_EOL);
        else if ($obj->name === 'Tyrion')
            print("Not even if I'm drunk !" . PHP_EOL);
        else
            print("Let's do this." . PHP_EOL);
    }
}
?>