<?php
class UnholyFactory{
    private $fighters = array();

    public function absorb($unit)
    {
        if($unit->$class)
        {
            if(!in_array($unit->$class, $this->$fighters))
            {
                $this->$fighters[] = $unit->$class;
                echo ("(Factory absorbed a figher of type ". $unit->$class.")\n");
            }
            else
                echo ("(Factory already absorbed a figher of type ". $unit->$class.")\n");
        }
        else
            echo ("(Factory can't absorb this, it's not a fighter)\n");;
    }

    public function fabricate($fighter_name) 
    {
        foreach ($this->$fighters as $fighter) {
            $role;
            print($fighter_name);
            if($fighter_name == "foot soldier")
                $role = "Footsoldier";
            else if($fighter_name == "archer")
                $role = "Archer";
            else if($fighter_name == "assassin")
                $role = "Assassin";            
            if ($fighter_name === $fighter) {
               print("(Factory fabricates a fighter of type " . $fighter_name . ")" . PHP_EOL);
               return (new $role);
            }
        print("(Factory hasn't absorbed any fighter of type " . $fighter_name . ")" . PHP_EOL);
        }
    }
}
?>