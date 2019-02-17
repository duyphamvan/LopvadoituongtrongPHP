<?php
    class Rectangle
    {  
        public $width;
        public $height;

        public function __construct($width, $height){
            $this->width = $width;
            $this->height = $height;
        }

        public function getArea()
        {
            return $this->width*$this->height;
        }

        public function getPerimeter()
        {
            return ($this->width+$this->height)*2;
        }

        public function display()
        {
            return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
        }
    }
    $width = 20;
    $height = 10;
    $rectangle = new Rectangle($width,$height);

    echo $rectangle->height.'<br/>';
    echo $rectangle->width.'<br/>';

    $rectangle->width = 30;
    $rectangle->height=20;
    echo $rectangle->width.'<br>';
    echo $rectangle->height.'<br>';
    echo $rectangle->display().'<br>';
    echo 'Area: '.$rectangle->getArea().'<br>';
    echo 'Perimeter: '.$rectangle->getPerimeter();


?>



