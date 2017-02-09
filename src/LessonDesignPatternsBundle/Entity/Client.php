<?php

namespace LessonDesignPatternsBundle\Entity;

class Client 
{
    private $name;
    private $age;
    private $mail;

    public function __construct($name, $mail, $age)
    {
        $this->name = $name;
        $this->mail = $mail;
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    
    public function getMail()
    {
        return $this->mail;
    }
    
    public function setMail($mail)
    {
        $this->mail = $mail;
        return $this;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }
}
