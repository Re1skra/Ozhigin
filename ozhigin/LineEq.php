<?php

namespace ozhigin;

class LineEq {
    protected $x;

    public function solveLineEq($a, $b) {
        if($a == 0) {
            return null;
        }
        return $this->x = -$b / $a;
    }
}