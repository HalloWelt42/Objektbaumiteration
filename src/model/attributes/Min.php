<?php
namespace HEF\model\attributes;

use HEF\model\HTMLAttribute;

class Min extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'min';
      $this->attribute_value = $value;

  }


}