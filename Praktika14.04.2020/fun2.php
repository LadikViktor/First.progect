<?php

function sum1(...$params)
{
    $s = 0;

    foreach ($params as $value) {
        $s += $value;
    }
    return $s;
}

function sum2(int ...$params)
{
    $s = 0;

    foreach ($params as $value) {
        $s += $value;ph
    }
    return $s;
}
