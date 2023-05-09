<?php

namespace Html\Head;

/**
 * Class that represent a navbar dropdown containing Links. 
*/
class Head extends \Html\HtmlElement
{

    #region --- Attributes ----------------------------------
    /** @var HeadElement[] $headElements Elements include in the HTML head (script, link) */
    private array $headElements;

    #endregion

    #region --- Constructor ----------------------------------
    public function __construct()
    {
        parent::__construct( [] );
        $this->headElements = [] ;
    }
    #endregion

    #region --- Properties ----------------------------------
    
    #endregion

    #region --- Methodes ----------------------------------

    /**
     * @param HeadElement
     */
    public function addElement( \Html\HtmlElement $element ) : void
    {
        if ( $element instanceof HeadElement )
        {
            array_push( $this->headElements, $element );
        }else
        {
            throw new \Exception( "Head can only add HeadElement." );
        }
    }

    private function renderElements() : string
    {
        $html = '';
        foreach( $this->headElements as $element )
        {
            $html .= $element->render();
        }

        return $html;
    }

    public function render() : string
    {
        $htmlHeadElements = $this->renderElements();
        $html = <<<HTML
                <head>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" async></script>
                    $htmlHeadElements
                </head>
                HTML;

        return $html;
    }
    #endregion
    
    
} 