<?php

trait FormElementCollection
{
    public function __construct(
        protected string $name = '',
        protected string $id = '',
    ) {
        parent::__construct($name, $id);

        $this->createElement();
    }

    public function getElement() : string
    {
        return $this->element;
    }
}