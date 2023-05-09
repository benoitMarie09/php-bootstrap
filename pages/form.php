<?php
use Form\InputNoteId;
use Form\TextArea;

$form = new Form\Form();
$form->addElement( new Form\Input( 
    name : 'titre',
    label : 'Titre',
    type : 'text'
) );
$form->addElement( new Form\TextArea(
    name :'descriptif',
    label : 'Déscriptif',
) );

echo $form->render();
