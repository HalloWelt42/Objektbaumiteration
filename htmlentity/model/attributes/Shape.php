<?php
namespace htmlentity\model\attributes;

use htmlentity\model\HTMLAttribute;

class Shape extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'shape';
      $this->attribute_value = $value;

  }


}