<?php
class NightsWatch{
    public $brackets = array();

    public function recruit($person){
        if($person instanceof IFighter)
        {
            $this->$brackets[] = $person;
        }
    }

    public function fight()
    {
        foreach ($this->$brackets as $warrior)
        {
            $warrior->fight();
        }
    }
}
?>