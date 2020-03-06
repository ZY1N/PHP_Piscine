<?php
class Targaryen {
    function resistsFire() {
        return False;
    }
    public function getBurned() {
        if($this->resistsFire() == TRUE)
        {
            return("emerges naked but unharmed");
        }
        else
            return("burns alive");
    }
}
?>