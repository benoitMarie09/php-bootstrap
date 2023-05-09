<?php

namespace Html;

/**
 * Describe a HtmlElement that can contain a colletction of HtmlElement
 */
interface IElementsContainer extends \IteratorAggregate
{
    public function addElement( HtmlElement $element ) : void;
}