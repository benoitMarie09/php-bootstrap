<?php

namespace Html\Body\Form;

/**
 * Classe de modélisation d'un formulaire HTML.
 */
class Form extends \Html\HtmlElement
{
    #region --- Attributs --------------------------
    /** @var FormElement[] $formElements Array des inputs du formumlaire. */
    private Array $formElements;

    #endregion

    #region --- Constructeur ------------------------
    public function __construct()
    {
        $this->formElements   = [];
    }
    #endregion

    #region --- Methodes ---------------------------
    /**
     * Permet l'ajout d'un input au formulaire.
     * @param Input $input Le input à ajouter
     */
    public function addElement( FormElement $formElement )
    {
        array_push( $this->formElements, $formElement );
    }

    public function render()
    {
        $html = '<div class="container mt-3">';
        $html .= '<form action="index.php" method="post">';
        foreach( $this->formElements as $formElement )
        {
            $html .= $formElement->render();
        }    
        $html .= '<button type="submit" class="btn btn-primary">Créer</button>';
        $html .= '</form>';
        $html .= '</div>';
        return $html;
    }

    public function getAllFromPost()
    {
        foreach ($this->formElements as $element) 
        {
            $requests[$element->name] = $element->getFromPost();
        }
        return $requests;
    }
    #endregion
}