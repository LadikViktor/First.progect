<?php
class Circle
{
    private $b;
    public function __construct($b)
    {
        $this->b = $b;
    }
    public function perimeter()
    {
        return $this->b * 2 * 3.14;
    }
    public function area()
    {
        return  $this->b ** 2 * 3.14;
    }
}
