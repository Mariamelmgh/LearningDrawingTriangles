<?php
class Point {
    private $x;
    private $y;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function afficherX() {
        return $this->x;
    }

    public function afficherY() {
        return $this->y;
    }

    public function distance(Point $pt2) {
        return sqrt(pow($this->x - $pt2->x, 2) + pow($this->y - $pt2->y, 2));
    }


public function gettingPoint($x,$y){

    $px = $py = -275;
    for($i= -11;$i<=11; $i++){
        if($i != $x){
        $px += 25;
            
        }else{
            break;
        }
    }
    for($i= 11;$i>= -11; $i--){
        if($i != $y){
        $py += 25;
        
        }else{
            break;
        }
    }   
    $this -> x = $px;
    $this -> y = $py;
   
}
}
/** */
class Triangle {
    private $pt1;
    private $pt2;
    private $pt3;

    public function __construct(Point $pt1, Point $pt2, Point $pt3) {
        $this->pt1 = $pt1;
        $this->pt2 = $pt2;
        $this->pt3 = $pt3;
    }

    public function isocele() {
        $a = $this->pt1->distance($this->pt2);
        
        $b = $this->pt2->distance($this->pt3);
       
        $c = $this->pt3->distance($this->pt1);
       
        return ($a == $b || $a == $c || $b == $c);
    }

    public function equilateral() {
        $a = $this->pt1->distance($this->pt2);
        $b = $this->pt2->distance($this->pt3);
        $c = $this->pt3->distance($this->pt1);

        return ($a == $b && $b == $c);
    }

    public function rectangle() {
        $a = $this->pt1->distance($this->pt2);
        $b = $this->pt2->distance($this->pt3);
        $c = $this->pt3->distance($this->pt1);

        return (pow($a, 2) + pow($b, 2) == pow($c, 2) ||
                pow($b, 2) + pow($c, 2) == pow($a, 2) ||
                pow($c, 2) + pow($a, 2) == pow($b, 2));
    }
}
/**** */
class Rectangle {
    private $width;
    private $height;
    private $pt;

    public function __construct(Point $pt, $width, $height) {
        $this->pt = $pt;
        $this->width = $width;
        $this->height = $height;
    }

    public function surface() {
        return $this->width * $this->height;
    }

    public function interieur1(Point $p) {
        return ($p->afficherX() >= $this->pt->afficherX() &&
                $p->afficherX() <= $this->pt->afficherX() + $this->width &&
                $p->afficherY() >= $this->pt->afficherY() &&
                $p->afficherY() <= $this->pt->afficherY() + $this->height);
    }

    public function interieur2(Rectangle $r) {
        return ($r->pt->afficherX() >= $this->pt->afficherX() &&
                $r->pt->afficherX() + $r->width <= $this->pt->afficherX() + $this->width &&
                $r->pt->afficherY() >= $this->pt->afficherY() &&
                $r->pt->afficherY() + $r->height <= $this->pt->afficherY() + $this->height);
    }

    public function egalite(Rectangle $r) {
        return ($this->pt->afficherX() == $r->pt->afficherX() &&
                $this->pt->afficherY() == $r->pt->afficherY() &&
                $this->width == $r->width &&
                $this->height == $r->height);
    }
}


?>