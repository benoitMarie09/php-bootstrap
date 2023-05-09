<?php

namespace Html\Body;
use Html\IElementsContainer;

/**
 * Class that represent the body part of the HTML page. 
*/
class Body extends \Html\HTMLElement implements IElementsContainer
{

    #region --- Attributes ----------------------------------
    /** @var BodyElement[] $bodyElements Elements include in the HTML body */
    private array $bodyElements;

    #endregion

    #region --- Constructor ----------------------------------
    public function __construct( $attributes = [] )
    {
        parent::__construct( $attributes );
        $this->bodyElements = [];
    }
    #endregion

    #region --- Properties ----------------------------------
    
    #endregion

    #region --- Methodes ----------------------------------

    /**
     * @param BodyElement
     */
    public function addElement( \Html\HtmlElement $element ) : void
    {
        if ( $element instanceof BodyElement )
        {
            array_push( $this->bodyElements, $element );
        }else
        {
            throw new \Exception( "Body can only add BodyElement." );
        }
    }

    public function getIterator(): \Traversable
    {
        return new \ArrayIterator( $this->bodyElements );
    }

    private function renderElements() : string
    {
        $html = '';
        foreach( $this as $element )
        {
            $html .= $element->render();
        }

        return $html;
    }

    public function render() : string
    {
        $htmlBodyElements = $this->renderElements() ;
        $html = <<<HTML
                <body>
                    $htmlBodyElements
                </body>
                HTML;

        return $html;
    }
    #endregion
    
    

} 