<?php
include '../Ex Shape/shape.php';
class Circle extends shape
{

    private $r;

    public function setr($r)
    {
        $this->r=$r;
    }

    public function getr($r)
    {
        return $this->r;
    }

    private function isNumber($x,$y,$color,$r)
    {
        if(is_numeric($x) && is_numeric($y) && is_string($color) && is_numeric($r))
        {
            $this->x = $x;
            $this->y = $y;
            $this->color = $color;
            $this->r = $r;
        }else
        {
            $this->x = 0;
            $this->y = 0;
            $this->color = 'none';
            $this->r = 0;
            echo "Variables are not number";
        }
    }

    public function __construct($x,$y,$color,$r) {
        $this->isNumber($x,$y,$color,$r);
        echo 'x: '.$this->x.' y: '.$this->y.' color: '.$this->color.' radius: '.$this->r.'</br>';
    }

    public function __destruct() {
        echo 'Destroying circle x: '.$this->x.' y: '.$this->y.' color: '.$this->color.' radius: '.$this->r.'</br>';
    }

    public function showInfo()
    {
        echo 'Circle data:<br>Center point x: '.$this->x.' y: '.$this->y.'<br>Color: '.$this->color.' radius: '.$this->r.'</br>';
    }

    public function showSurfacearea()
    {
        echo 'Surface area: '.(pi()*pow($this->r,2)).'</br>';
    }

    public function showPerimeter()
    {
        echo 'Perimeter: '.(2*pi()*$this->r).'</br>';
    }
}
?>