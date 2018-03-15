<?php
Class Vector
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

    public function additionVector(vector $vector)
    {
        echo 'Vector addition: x:'.($this->x+$vector->x).' y:'.($this->y+$vector->y).'</br>';
    }

    public function dotproductVector(vector $vector)
    {
        echo 'Vector scalar product:'.(($this->x*$vector->x)+($this->y*$vector->y)).'</br>';
    }

}


?>