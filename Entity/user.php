<?php

class User
{
    private $id;
    private $name;
    private $address;

    private $something;


    public function __construct($id, $name, $address)
    {
        $this->id = $id;
        $this->name = $name;
        $this->address = $address;
        echo "Constructor invoked";
    }

    public function __destruct()
    {
        echo "Destructor invoked";
    }


    public function getSmthng()
    {
        return $this->something;
    }

    public function setSmthng($smthng)
    {
        $this->something = $smthng;
    }
}



     $u1 = new User(5,"Sagar","in the mumbai");
     echo $u1 -> getSmthng();
     $u1 -> setSmthng("bleh bleh");
     echo $u1 -> getSmthng();
     $u1 = null;
?>