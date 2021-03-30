<?php

ini_set("display_errors", 1);
error_reporting(-1);

class A {
    protected $x;

    public function solveLineEq($a, $b) {
        if($a == 0) {
            return null;
        }
        return $this->x = -$b / $a;
    }
}

class B extends A {
    protected function solveDiscriminant($a, $b, $c) {
        return $discriminant = ($b ** 2) - 4 * $a * $c;
    }

    public function solveSquareEq($a, $b, $c) {
        if($a == 0) {
            return parent::solveLineEq($b, $c);
        }
        $dis = $this->solveDiscriminant($a, $b, $c);
        if($dis > 0) {
            $square = sqrt($dis);
            return $this->x = array((-$b + $square) / (2 * $a), (-$b - $square) / (2 * $a));
        }
        if($dis == 0) {
            return $this->x = -$b / (2 * $a);
        }
        return null;
    }
}

$a = new A();
$b = new B();
var_dump($a->solveLineEq(-8.5, -17));
var_dump($b->solveSquareEq(-1, -2, 15));