<?php
namespace HEF\model\attributes;

use HEF\model\HTMLAttribute;

class DefaultType extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'default';
      $this->attribute_value = $value;

  }


}