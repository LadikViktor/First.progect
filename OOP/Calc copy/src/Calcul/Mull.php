<?php

namespace  Calcul;

trait Mull
{
    /**
     * умножение
     */
    public function mull($a, $b)

    {
        return $a * $b;
    }
    /**
     * деление
     */
    public function del(int $a, int $b)
    {
        return  $a / $b;
    }
}
