<?php

namespace LessonDesignPatternsBundle\Service;

use LessonDesignPatternsBundle\Strategies\EmailInterface;

class GenderService
{
    private $strategyGender;
    
    public function __construct(EmailInterface $strategyGender)
    {
        $this->strategyGender = $strategyGender;
    }
    
    public function setEmail($email)
    {
        $this->strategyGender->setEmail($email);
        return $this;
    }
 
    public function setHtml($html)
    {
        $this->strategyGender->setHtml($html);
        return $this;
    }
    
    public function setName($name)
    {
        $this->strategyGender->setName($name);
        return $this;
    }
    
    public function send()
    {
        return $this->strategyGender->send(null, null);
    }
}
