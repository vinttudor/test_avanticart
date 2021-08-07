<?php

function autoloader($class) {
    include 'classes/' . $class . '.php';
}

include 'interfaces/FormElementDefinition.php';
include 'traits/FormElementCollection.php';

spl_autoload_register('autoloader');

$action = '/doStuff';
$method = 'POST';
$form = new Form($action, $method);
 
$form->addField(new InputField('nume'));
$form->addField(new InputField('prenume'));
$form->addField(new Textarea('adresa'));
$form->addField(new Checkbox('termeni_si_conditii'));
 
$form->display();