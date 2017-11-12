<?php

namespace Niklas\Albums;

class Album{

    private $interpret;
    private $title;
    private $label;

    public function __construct(string $interpret, string $title, string $label)
    {
       $this->interpret=$interpret;
       $this->title=$title;
       $this->label=$label;
    }

    public function __toString()
    {
        return "Titel: ".$this->title." | Interpret: ".$this->interpret." | Label: ".$this->label;
    }

    public function getInterpret(){
        return $this->interpret;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getLabel(){
        return $this->label;
    }

}