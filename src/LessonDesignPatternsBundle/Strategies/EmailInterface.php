<?php

namespace LessonDesignPatternsBundle\Strategies;

interface EmailInterface
{
    
    public function setEmail($email);
    
    public function setName($user);
    
    public function setHtml($html);
    
    public function send($user, $email);
    
}