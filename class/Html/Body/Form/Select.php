<?php

namespace Html\Body\Form;

/**
 * Classe qui modélise un Select Html
 */
class Select extends FormElement
{

    #region --- Attibuts ---------------------
    /** @var SelectOption[] $options Les options du selects */
    private $options;
    #endregion


    #region --- Constructeur ---------------------
    public function __construct( string $name, string $label, array $options )
    {
        parent::__construct(  $name, $label );
        $this->options = $options;

    }
    #endregion


    #region --- Methodes ---------------------
    public function render()
    {
        $html = "<select class=\"form-control\" name=\"$this->name\" id=\"$this->name\">";
        foreach( $this->options as $option )
        {
            $html .= "<option value=\"$option->value\">$option->name</option>";
        }
        $html .= "</select>";

        return $html;
    }
    #endregion
}