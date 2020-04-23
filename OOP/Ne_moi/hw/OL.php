<?php

class OL extends Li
{
   
    {
        protected $type = "1";
    
        public function html()
        {
            return "\n<ul type = '$this->type' $this->style id = '$this->id' $this->class>\n$this->data</ul> ";
        }
    
        public function setType(string $type)
        {
            if (in_array($type, ["square", "circle", "disk"])) {
                $this->type = $type;
            }
            return $this;
        }
    }
}
