<?php

namespace Calcul;

interface  CalculatorInterface
{
    public function del(int $a, int $b);
    public function diff(int $a, int $b);
    public function sum(int $a, int $b);
    public function mull(int $a, int $b);
}
