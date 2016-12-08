<?php

namespace LessonDesignPatternsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use LessonDesignPatternsBundle\Singleton\EmailSingleton;
use LessonDesignPatternsBundle\Factory\ClientFactory;

class exampleSingletonController extends Controller
{
    public function indexAction() 
    {
        return $this->render('LessonDesignPatternsBundle:Lessons:Singleton.html.twig');
    }
    
    
    public function sendEmailWesleyAction()
    {
        /*@var $wesley LessonDesignPatternsBundle\Entity\Client */
        $wesley = $this->get('client.factory')->createClient()->getWesley();
        
        $message = EmailSingleton::getEmail()->setType('Postfix')->sendEmail($wesley->getName(), $wesley->getMail());
        
        return $this->render('LessonDesignPatternsBundle:Lessons:MessageSingleton.html.twig', ['message' => $message]);
        
    }
    
    public function sendEmailMilaniAction()
    {
        /*@var $wesley LessonDesignPatternsBundle\Entity\Client */
        $milani = $this->get('client.factory')->createClient()->getMilani();
        
        $message = EmailSingleton::getEmail()->setType('Mail PHP')->sendEmail($milani->getName(), $milani->getMail());
        
        return $this->render('LessonDesignPatternsBundle:Lessons:MessageSingleton.html.twig', ['message' => $message]);
    }
    
}