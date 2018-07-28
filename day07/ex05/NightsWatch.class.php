<?php

class NightsWatch{
    private $army = array();
    public function recruit ($some)
    {
        $this->army[] = $some;
    }
    function fight (){
        foreach ($this->army as $recruit) {
            if (method_exists(get_class($recruit), 'fight'))
                $recruit->fight();
        }
    }
}
?>