<?php

namespace HEF\model;

use ArrayAccess;
use Iterator;


/**
 * Class HTMLElements
 * @package htmlentity\model
 */
class HTMLElements implements ArrayAccess, Iterator
{

  protected $html_elements;
  protected $index;

  /**
   * HTMLElements constructor.
   */
  public function __construct()
  {
    $this->html_elements = [];
    $this->index = 0;
  }

  /**
   * @inheritDoc
   */
  public function offsetExists($offset)
  {
    return isset($this->html_elements[$offset]);
  }

  /**
   * @inheritDoc
   */
  public function offsetGet($offset)
  {
    return isset($this->html_elements[$offset]) ? $this->html_elements[$offset] : null;
  }

  /**
   * @inheritDoc
   */
  public function offsetSet($offset, $value)
  {

    if( !$value instanceof HTMLElement ){
      return false; //todo eception?
    }

    if (is_null($offset)) {
      $this->html_elements[] = $value;
    } else {
      $this->html_elements[$offset] = $value;
    }
  }


  /**
   * @param $element
   * @return $this
   */
  function add($element)
  {
    $this->offsetSet(null, $element);
    return $this;
  }


  /**
   * @inheritDoc
   */
  public function offsetUnset($offset)
  {
    unset($this->html_elements[$offset]);
  }

  /**
   * @inheritDoc
   */
  public function current()
  {
    return $this->html_elements[$this->index];
  }

  /**
   * @inheritDoc
   */
  public function next()
  {
    ++$this->index;
  }

  /**
   * @inheritDoc
   */
  public function key()
  {
    return $this->index;
  }

  /**
   * @inheritDoc
   */
  public function valid()
  {
    return isset($this->html_elements[$this->index]);
  }

  /**
   * @inheritDoc
   */
  public function rewind()
  {
    $this->index = 0;
  }
}