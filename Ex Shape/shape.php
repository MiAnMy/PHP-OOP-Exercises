<?php
class Shape
{
    private $x;
    private $y;
    private $color;

    private function isNumber($x,$y,$color)
    {
        if(is_numeric($x) && is_numeric($y) && is_string($color))
        {
            $this->x = $x;
            $this->y = $y;
            $this->color = $color;
        }else
        {
            $this->x = 0;
            $this->y = 0;
            $this->color = 'none';
            echo "Variables are not number";
        }
    }

    public function __construct($x,$y,$color) {
        $this->isNumber($x,$y,$color);
        echo 'x: '.$this->x.' y: '.$this->y.' color: '.$this->color.'</br>';
    }

    public function __destruct() {
        echo 'Destroying shape x: '.$this->x.' y: '.$this->y.' color: '.$this->color.'</br>';
    }

    public function showInfo()
    {
        echo 'Shape data:<br>Center point x: '.$this->x.' y: '.$this->y.'<br>Color: '.$this->color.'</br>';
    }

    public function showDist(shape $shape)
    {
        echo 'Distance between shapes:'.sqrt(pow(($this->x-$shape->x),2)+pow(($this->y-$shape->y),2)).'</br>';
    }
}
?>