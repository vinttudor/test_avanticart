<?php

class Form
{
    private array $elements;

    public function __construct(
        public string $action = '',
        public string $method = 'GET',
    ) { }

    public function addField(FormElementDefinition $formElement) : void
    {
        $this->elements[] = $formElement;
    }

    public function display() : void
    {
        $form =  '<form action="' . $this->action . '" method="' . $this->method . '">';
        foreach ($this->elements as $element) {
            $form .= $element->getElement() . "</br>";
        }
        $form .= '</form>';

        echo $form;
    }
}