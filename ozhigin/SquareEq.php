<?php

namespace ozhigin;

use core\EquationInterface;

class SquareEq extends LineEq implements EquationInterface {
    protected function solveDiscriminant($a, $b, $c) {
        return $discriminant = ($b ** 2) - 4 * $a * $c;
    }

    public function solve($a, $b, $c) {
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