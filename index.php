<?php

class A {

}

class B extends A {
    /**
     * @return mixed
     */
    public function getA()
    {
        return $this->a;
    }

    /**
     * @param mixed $a
     */
    public function setA($a)
    {
        $this->a = $a;
    }

    /**
     * @return mixed
     */
    public function getB()
    {
        return $this->b;
    }

    /**
     * @param mixed $b
     */
    public function setB($b)
    {
        $this->b = $b;
    }
    public function __construct($a, $b)   {
        $this->a = $a;
        $this->b = $b;
    }

    protected $a, $b;
}

$a1 = new A();
$a2 = new A();
$b3 = new B($a1, $a2);
$b4 = new B($b3, new A());

var_dump ($b4);
