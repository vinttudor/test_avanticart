<?php

interface FormElementDefinition
{
    public function createElement() : string;
    public function getElement() : string;
}