<?php

namespace LessonDesignPatternsBundle\Strategies;

class HomemEmailStrategy extends AbstractGender implements EmailInterface
{

    public function setName($user)
    {
        $this->html = "sou homem" . $user;
        return $this;
    }

}
