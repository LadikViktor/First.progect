<?php

class Tictac
{
    protected $map = [];

    public function __construct(int $n = 3)
    {
        $this->initMap($n);
    }

    public function getMap()
    {
        return $this->map;
    }

    public function initMap(int $n)
    {
        $this->map = [];

        for ($i = 0; $i < $n; $i++) {

            $row = [];

            for ($j = 0; $j < $n; $j++) {
                $row[] = null;
            }

            $this->map[] = $row;
        }
        return $this;
    }

    public function putCross(int $i, int $j)
    {
        if ($this->available($i, $j)) {
            $this->map[$i][$j] = 1;
        }
        return $this;
    }

    public function putNull(int $i, int $j)
    {
        if ($this->available($i, $j)) {
            $this->map[$i][$j] = 0;
        }
        return $this;
    }

    private function transpose($array)
    {
        return array_map(null, ...$array);
    }

    private function checWinByRow($map)
    {
        foreach ($map as $row) {
            $winner = $row[0];
            for ($i = 1; $i < count($row); $i++) {
                if ($row[$i] !== $row[$i - 1]) {
                    $winner = null;
                }
            }
            if ($winner !== null) {
                return $winner;
            }
        }
        return null;
    }

    public function checWin()
    {
        if (($winner = $this->checWinByRow($this->map)) !== null) {
            return $winner;
        }
        if (($winner = $this->checWinByCol()) !== null) {
            return $winner;
        }
        return null;
    }

    public function checWinByCol()
    {
        return $this->checWinByRow($this->transpose($this->map));
    }

    // public function putRand(int $n)
    // {
    //     $i = rand(0, $n);
    //     $j = rand(0, $n);

    //     if ($this->available($i, $j)) {
    //         $this->map[$i][$j] = "<img src='null.png'>";

    //         return $this;
    //     }
    // }

    public function available(int $i, int $j): bool
    {
        $av = false;

        if ($i >= 0 && $i < count($this->map)) {
            if ($j >= 0 && $j < count($this->map[0])) {
                if ($this->map[$i][$j]  === null) {
                    $av = true;
                }
            }
        }

        return $av;
    }
}
