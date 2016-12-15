<?php

namespace LessonDesignPatternsBundle\Strategies;

use LessonDesignPatternsBundle\Singleton\EmailSingleton;

abstract class AbstractGender
{
    private $user;
    private $email;
    private $html;

    public function send($user, $email)
    {
        $service = EmailSingleton::getEmail();
        return $service->setType($this->html)
                ->sendEmail($this->user, $this->email);
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function setHtml($html)
    {
        $this->html = $html;
        return $this;
    }

    public abstract function setName($user);

}
