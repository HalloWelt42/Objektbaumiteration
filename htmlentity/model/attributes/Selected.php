<?php
namespace htmlentity\model\attributes;

use htmlentity\model\HTMLAttribute;

class Selected extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'selected';
      $this->attribute_value = $value;

  }


}