<?php
namespace HEF\model\htmlelements;

use HEF\model\attributesets\TEventHandlerAttributes;
use HEF\model\attributesets\TGlobalAttributes;
use HEF\model\HTMLElement;
use HEF\model\HTMLElements;
use HEF\model\htmlelements\groupinginterfaces\IContentSection;

class H5 extends HTMLElement implements IContentSection
{
  use TGlobalAttributes;
  use TEventHandlerAttributes;


  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'h5';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
