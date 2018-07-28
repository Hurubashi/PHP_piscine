<?php
class Targaryen {

    public function resistsFire () {
        return False;
    }
    function getBurned () {
        if ($this->resistsFire() === True)
            return "emerges naked but unharmed";
        else
            return "burns alive";
    }
}
?>