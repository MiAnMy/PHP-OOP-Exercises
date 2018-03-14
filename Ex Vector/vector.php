<?php
Class vector
{
    private $x;
    private $y;
    private function isNumber($x,$y)
    {
        if(is_numeric($x) && is_numeric($y))
        {
            $this->x = $x;
            $this->y = $y;
        }else
        {
            $this->x = 0;
            $this->y = 0;
            echo "Variables are not number";
        }
    }

    public function __construct($x,$y) {
        $this->isNumber($x,$y);
        echo 'x: '.$this->x.' y: '.$this->y.'</br>';
    }

    public function __destruct() {
        echo 'Destroying vector x: '.$this->x.' y: '.$this->y.'</br>';
    }

    public function updateData($x,$y){
        $this->isNumber($x,$y);
        echo 'Update vector x: '.$this->x.' y: '.$this->y.'</br>';
    }

    public function returnLength()
    {
        echo 'Vector length: '.sqrt((pow($this->x,2)+pow($this->y,2))).'</br>';
    }

    public function additionVector(vector $ve2)
    {
        echo 'Vector addition: x:'.($this->x+$ve2->x).' y:'.($this->y+$ve2->y).'</br>';
    }

    public function dotproductVector(vector $ve2)
    {
        echo 'Vector scalar product:'.(($this->x*$ve2->x)+($this->y*$ve2->y)).'</br>';
    }

}


?>