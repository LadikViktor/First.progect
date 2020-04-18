<?php
class Triangle
{
    private $a;
    private $b;
    private $c;
    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    public function perimeter()
    {
        return $this->a  + $this->b + $this->c;
    }
    public function area()
    {

        return ($this->a * $this->b) / 2;
    }
}
