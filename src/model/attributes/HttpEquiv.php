<?php


namespace HEF\model\attributes;


use HEF\model\HTMLAttribute;

class HttpEquiv extends HTMLAttribute
{
    const CONTENTT_TYPE = 'Content-Type';
    const REFRESH = 'refresh';

    public function __construct ( $value = NULL )
    {
        $this->attribute_name='charset';
        $this->attribute_value=$value;

    }
}