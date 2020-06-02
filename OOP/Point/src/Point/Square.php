<?php

namespace Point;

class Square implements SquareInterface
{
    protected $startPoint;
    protected $endPoint;

    public function setStartPoint(Point $startPoint): Square
    {
        $this->startPoint = $startPoint;

        return $this;
    }


    public function setEndPoint(Point $endPoint): Square
    {
        $this->endPoint = $endPoint;

        return $this;
    }

    private function width(): float
    {
        return $this->endPoint->getX() - $this->startPoint->getX();
    }

    private function height(): float
    {
        return $this->endPoint->getY() - $this->startPoint->getY();
    }


    public function getArea(): float
    {
        return $this->width() * $this->height();
    }

    public function getPerimeter(): float
    {
        return ($this->width() + $this->height()) * 2;
    }
}
