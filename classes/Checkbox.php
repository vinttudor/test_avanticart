<?php

class Checkbox extends FormElement
{
    use FormElementCollection;

    public function createElement() : string
    {
        $this->element = '<input type="checkbox" ' . parent::createElement() . '/>';

        return $this->element;
    }
}