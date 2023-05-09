<?php

namespace Html\Body\Form;

/**
 * Classe qui modélise un texteArea html AVEC CKEDITOR
*/
class TextArea extends FormElement
{
    #region --- Attributs ------------------------

    #endregion

    #region --- Constructeur ---------------------
    public function __construct( $name, $label )
    {
        parent::__construct( $name, $label );
    }
    #endregion

    #region --- Methodes -------------------------
    public function render()
    {
        $html = "<label for=\"$this->label\"></label>"
                ."<textarea name=\"$this->name\"></textarea>"
                ."<script>"
                    ."CKEDITOR.replace( '$this->name' )"
                ."</script>";

        return $html;
    }
    #endregion
}