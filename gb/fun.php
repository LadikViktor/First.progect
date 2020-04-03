<?php


function smile($emodzi)
{
    return preg_replace(
        [
            '/\:-{0,1}\)/',
            '/\:-{0,1}\(/'
        ],
        [
            '😀',
            '😆'
        ],
        $emodzi
    );
}
