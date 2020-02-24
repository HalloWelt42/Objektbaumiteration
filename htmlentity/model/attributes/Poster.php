<?php
namespace htmlentity\model\attributes;

use htmlentity\model\HTMLAttribute;

class Poster extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'poster';
      $this->attribute_value = $value;

  }


}