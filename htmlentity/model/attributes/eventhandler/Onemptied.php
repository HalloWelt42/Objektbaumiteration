<?php
namespace htmlentity\model\attributes\eventhandler;

use htmlentity\model\HTMLAttribute;

class Onemptied extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'onemptied';
      $this->attribute_value = $value;

  }


}