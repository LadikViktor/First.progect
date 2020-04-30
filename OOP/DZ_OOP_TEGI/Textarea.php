<?php
class Textarea extends PairTag
{

    public function textareaa($arr)
    {
        return "<textarea name=" . $arr['name'] . " id=" . $arr['id'] . "
         cols=" . $arr['cols'] . " rows=" . $arr['rows'] . "></textarea> ";
    }
}
