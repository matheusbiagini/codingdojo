<?php


namespace LessonDesignPatternsBundle\Service;


class EmailService {
    
    private $type;
    
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
    
    private function getType()
    {
        return $this->type;
    }
    
    public function sendEmail($user, $email)
    {
        return "Enviado um email do tipo ".$this->getType()." <{$email}> para o usuario {$user} com sucesso";
    }
    
}
