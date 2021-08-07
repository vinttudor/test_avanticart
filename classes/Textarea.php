<?php

class Textarea extends FormElement
{
    use FormElementCollection;

    public function createElement() : string
    {
        $this->element = '<textarea ' . parent::createElement() . '></textarea>';

        return $this->element;
    }
}