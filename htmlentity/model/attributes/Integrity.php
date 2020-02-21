<?php
namespace htmlentity\model\attributes;

use htmlentity\model\HTMLAttribute;

class Integrity extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'integrity';
      $this->attribute_value = $value;

  }


}