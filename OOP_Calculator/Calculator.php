<?php

class Calculator
{
    private $a;
    private $b; //поля

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function sum()
    {
        return $this->a + $this->b;
    }

    public function mul()
    {
        return $this->a * $this->b;
    }

    public function dif()
    {
        return $this->a - $this->b;
    }

    public function div()
    {
        return $this->a / $this->b;
    }
}
