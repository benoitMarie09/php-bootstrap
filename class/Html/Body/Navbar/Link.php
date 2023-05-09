<?php

namespace Html\Body\Navbar;

/**
 * Classe qui modélise un lien dans une barre de navigation HTML.
 */
class Link extends \Html\HtmlElement
{
    #region --- Attributs -----------------------------
    /** @var string Label du lien. */
    private string $label;

    /** @var string Url du lien. */
    private $href;
    #endregion

    #region --- Constructeur -----------------------------
    public function __construct( $label, $href )
    {
        $this->label    = $label; 
        $this->href     = $href;
    }
    #endregion

    #region --- Methodes -----------------------------
    public function render() : string
    {
        $html = <<<HTML
                <li class="nav-item active">
                    <a class="nav-link" href="$this->href">$this->label</a>
                </li>
                HTML;

        return $html;
    }
    #endregion
}