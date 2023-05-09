<?php
namespace Html;
/**
 * Classe fondatrice pour les éléments HTML.
 * <br>Regroupe des mécanismes fondamentaux comme la génération
 * de l'indentation pour le rendu.
 */
abstract class HtmlElement
{
    #region --- ATTRIBUTS ------------------------------------------------------
    /** @var array $attributes Html attributes of the Element */
    protected array $attributes;
    #endregion

    #region --- Constructor ----------------------------------
    public function __construct( $attributes )
    {
        $this->attributes = $attributes;
    }
    #endregion

    #region --- Properties ----------------------------------

    #endregion

    #region --- MÉTHODES -------------------------------------------------------

    /** 
     * Render all attributes.
     * @return string All attributes with the key = "value" format.
     */
    protected function renderAttr() : string
    {
        $html = '';
        foreach( $this->attributes as $key => $value )  
        {
            if( $key != 'class' )
            {
                isset($value)   ? $html .= $key . '="' . $value . '"'
                                : $html .= $key;
            }
        }  
        return $html;
    }

    /** Exécute le rendu du code HTML de l'élément, et le retourne dans une chaîne.
     * @return string
     */
    public abstract function render() :string ;

    #endregion
}
