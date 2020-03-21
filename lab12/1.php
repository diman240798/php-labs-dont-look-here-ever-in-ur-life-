<?php

class BaseClass {
    protected $name;
    protected $prop = "lalala";

    function __construct($name) {
        $this->name = $name;
        print "Конструктор класса BaseClass вызван для $name</br>";
    }

    public function __toString() {
        return "Объект класса BaseClass с именем $this->name</br>";
    }
    public function __destruct() {
        print "Деструктор класса BaseClass вызван для $this->name</br>";
    }

    public function __get($name)
    {
        print "Нет свойства с именем $name</br>";
    }

    public function __set($name, $value)
    {
        print "Нельзя присвоить свойству $name значение $value</br>";
    }

    public function __call($name, $arguments) {
        print "Нельзя вызвать метод $name с аргументами $arguments</br>";
        return "Ошибка вызова</br>";
    }
}

$obj = new BaseClass("Дмитрий");
print $obj;

class SubClass extends BaseClass {
    function __construct($name) {
        parent::__construct($name);
        print "Конструктор класса SubClass вызван для $name</br>";
    }

    public function __toString() {
        return "Объект класса SubClass с именем $this->name</br>";
    }
    public function __destruct() {
        parent::__destruct();
        print "Деструктор класса SubClass вызван для $this->name</br>";
    }
}


$obj = new SubClass("Игоревич");
print $obj;

$obj->prop = "hmmm";
"---".$obj->prop."+++";
print $obj->missingMethod(1,2);