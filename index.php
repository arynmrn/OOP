<?php

class MyClass{

    public $name = "Aryan Emrany";

    public function setvalue($newval)
    {
        $this->name = $newval;
    }


    public function getName()
    {
        return $this->name."<br/>";
    }
}

$obj = new MyClass;

echo $obj->getName();

$obj->setvalue("Arcoo");

echo $obj->getName();


?>