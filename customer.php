<?php
class customer
{
    public $name;
  public $color;

//   public function __construct($name) {
//     $this->name = $name;
//   }
  public function __construct()
  {
      $this->name = "DQA";
      $this->color = "blue";
  }
  public function get_name() {
    return $this->name;
  }
}

$apple = new customer();
echo $apple->get_name();

