<?php
class customer
{
    public $name;
    public $color;
    public function set_name($name) 
    {
        $this->name = $name;
    }
    public function get_name() 
    {
        return $this->name;
    }
}

$c = new customer();
$c->set_name("DQA");
echo $c->get_name();
