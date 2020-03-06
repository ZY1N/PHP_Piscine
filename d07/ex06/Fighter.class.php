<?php
class Fighter{
    public $class;

    public function __construct($role)
    {
        $this->$class = $role;
    }
}

// class Fighter {
//     public function __construct($type) {
//         $this->$class = $type;
//     }
// }
?>