<?php

class InputField extends FormElement
{
    use FormElementCollection;

    public function createElement() : string
    {
        $this->element = '<input type="text" ' . parent::createElement() . ' value="" />';

        return $this->element;
    }
}