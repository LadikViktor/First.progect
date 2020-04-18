<?php

class Engineer extends Student
{
    public function work()
    {
        return "I can work";
    }

    public function Learn()
    {
        return parent::Learn() . "very well";
    }
}
