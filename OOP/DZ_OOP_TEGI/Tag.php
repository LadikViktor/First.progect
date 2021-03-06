<?php

abstract class Tag
{
    protected $style;
    protected $class;
    protected $id;
    protected $innerText;



    public function setStyle(string $text)
    {
        $this->style = "style='$text'";
        return $this;
    }

    public function setClass(string $text)
    {
        $this->class = "class='$text'";
        return $this;
    }

    public function setId(string $text)
    {
        $this->id = "id='$text'";
        return $this;
    }

    public function setInnerText(string $text)
    {
        $this->innerText = $text;
        return $this;
    }

    abstract public function html();
}
