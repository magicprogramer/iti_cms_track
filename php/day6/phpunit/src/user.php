<?php
class User {

    public $name = "anything";

    public $email = "anything@gmail.com";

    function __construct($name, $email)

    {

        $this->name = $name;

        $this->email = $email;

    }
 
    public function setname($name)

    {

        $this->name = $name;
        return $this->name;

    }
 
    public function getname()

    {

        return $this->name;

    }
 
    public function getemail()

    {

        return $this->email;

    }
 
    public function setemail($email)
    {

        $this->email = $email;
        return $this->getemail();

    }

}
 