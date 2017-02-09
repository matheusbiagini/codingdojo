<?php
namespace LessonDesignPatternsBundle\Strategies;

use LessonDesignPatternsBundle\Strategies\AbstractGender;
use LessonDesignPatternsBundle\Strategies\EmailInterface;

class MulherEmailStrategy extends AbstractGender implements EmailInterface
{
    public function setName($user)
    {
        $this->html = "sou mulher " . $user;
        return $this;
    }

}
