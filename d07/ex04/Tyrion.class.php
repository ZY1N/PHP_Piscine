<?php 
class Tyrion{
    public function sleepWith($family){
        $class = get_class($family);
        if($class == "Jaime")
            print("Not even if I'm drunk !\n");
        else if($class == "Sansa")
            print("Let's do this.\n");
        else if($class == "Cersei")
            print("Not even if I'm drunk !\n");
    }
}
?>