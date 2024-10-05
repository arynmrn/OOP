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
$obj2 = new MyClass();

echo $obj->getName();

$obj->setvalue("Arcoo");
$obj2->setvalue("arcoo.ir");

echo $obj->getName();
echo $obj2->getName();


?>