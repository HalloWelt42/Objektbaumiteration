<?php
namespace HEF\model\htmlelements;

use HEF\model\attributesets\TGlobalAttributes;
use HEF\model\attributesets\TEventHandlerAttributes;
use HEF\model\attributesets\TProgressAttributes;
use HEF\model\HTMLElement;
use HEF\model\HTMLElements;
use HEF\model\htmlelements\groupinginterfaces\IForms;

class Progress extends HTMLElement implements IForms
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TProgressAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'progress';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
