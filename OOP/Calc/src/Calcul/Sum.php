<?php

namespace Calcul;

trait Sum
{
    /**
     * сумма
     */
    public function sum($a, $b)
    {
        return $a + $b;
    }
    /**
     * разница
     */
    public function diff(int $a, int $b)
    {
        return $a - $b;
    }
}
