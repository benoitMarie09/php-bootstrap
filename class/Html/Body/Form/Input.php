<?php

namespace Html\Body\Form;

class Input extends FormElement
{
    #region --- Attributs --------------------------
    /** @var string $type type de l'input */
    private string $type;
    /** @var bool $readonly Determine si le input est en lecture seul */
    private bool $readonly;
    /** @var string $placeHolder valeur du placeholder de l'input */
    private string $placeHolder;
    #endregion

    #region --- Constructeur ------------------------
    public function __construct( $name, $label, $type)
    {
        parent::__construct( $name, $label );
        $this->type         = $type;

    }
    #endregion

    #region --- Methodes ---------------------------
    public function render()
    {
        $html =  '<div class="form-floating mt-3 mb-3">'
                ."<input class=\"form-control\" "
                    ." type=\"$this->type\""
                    ." name=\"$this->name\"" 
                    ." id=\"$this->name\""
                    ." value=\"$this->value\"";
        $html .= $this->renderAttributs();
        $html .= ">";
        $html .= "<label for=\"$this->label\">$this->label</label>";
        $html .= '</div>';
        return $html;

    }

    #endregion
} 