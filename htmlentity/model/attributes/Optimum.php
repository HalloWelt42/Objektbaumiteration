<?php
namespace htmlentity\model\attributes;

use htmlentity\model\HTMLAttribute;

class Optimum extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'optimum';
      $this->attribute_value = $value;

  }


}