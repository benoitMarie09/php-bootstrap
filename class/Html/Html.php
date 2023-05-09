<?php

namespace Html;

/**
 * Represent an HTML page.
*/
class Html
{

    #region --- Attributes ----------------------------------
    /** @var \Html\Head\Head $head Head of the HTML page.  */
    private \Html\Head\Head $head;

    /** @var \Html\Body\Body $body Body of the HTML page.  */
    private \Html\Body\Body $body;
    #endregion

    #region --- Constructor ----------------------------------
    public function __construct()
    {
        $this->head   = new Head\Head();
        $this->body     = new Body\Body();
    }
    #endregion

    #region --- Properties ----------------------------------
    public function __get( $name )
    {
        switch( $name ) 
        {
            case 'header':
                return $this->head;

            case 'body':
                return $this->body;
            
            default:
                throw new \Exception( "undefined attribute $name" );
        }
    }
    #endregion

    #region --- Methodes ----------------------------------

    #endregion
    
    
    public function render() : string
    {
        $htmlHeader = $this->header->render();
        $htmlBody   = $this->body->render();
        $html = <<<HTML
                <!doctype html>
                <html lang="fr">
                $htmlHeader
                $htmlBody
                </html>
                HTML;

        return $html;
    }
} 