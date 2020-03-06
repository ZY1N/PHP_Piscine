<?php
class Jaime{
    public function sleepWith($family){
        $class = get_class($family);
        if($class == "Tyrion")
            print("Not even if I'm drunk !\n");
        else if($class == "Sansa")
            print("Let's do this.\n");
        else if($class == "Cersei")
            print("With pleasure, but only in a tower in Winterfell, then.\n");
    }
}
?>