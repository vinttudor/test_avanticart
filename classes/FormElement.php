<?php

abstract class FormElement implements FormElementDefinition
{
    protected string $element;

    public function __construct(
        protected string $name = '',
        protected string $id = '',
    ) {
        $this->id = !empty($this->id) ? $this->id : $name;
    }

    public function createElement() : string
    {
        $this->element = 'id="' . $this->id . '" name="' . $this->name . '"';

        return $this->element;
    }

    abstract public function getElement() : string;
}
