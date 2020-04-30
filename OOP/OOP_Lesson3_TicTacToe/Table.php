<?php
class Table
{
    protected $table;
    protected $style;
    protected $data;

    public function __construct()
    {
        $this->clear();
    }

    public function clear(): self
    {
        $this->style = '';
        $this->data = '';
        return $this;
    }

    public function style(string $style): self
    {
        $this->style = " style='$style'";
        return $this;
    }

    public function data(array $data): self
    {
        $str = "";

        foreach ($data as $row) {
            $str .= "<tr style='color:black;'>";
            foreach ($row as $cell) {
                $str .= "<td style='border: 1px solid black;width:30px; height:30px; color:white; text-align: center;'>$cell</td>";
            }
            $str .= "</tr>";
        }

        $this->data = $str;
        return $this;
    }
    public function html()
    {
        return "<table$this->style>$this->data</table>";
    }
}
