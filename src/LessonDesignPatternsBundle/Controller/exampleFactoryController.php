<?php

namespace LessonDesignPatternsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class exampleFactoryController extends Controller
{
    public function indexAction() 
    {
        return $this->render('LessonDesignPatternsBundle:Lessons:Factory.html.twig');
    }
    
    public function wesleyAction() {
        
        $wesley = $this->get('client.factory')->createClient()->getWesley();

        return $this->render('LessonDesignPatternsBundle:Lessons:WesleyFactory.html.twig', ['wesley'=>$wesley]);
    }
    
    public function milaniAction() {
        
        $milani = $this->get('client.factory')->createClient()->getMilani();
        
        return $this->render('LessonDesignPatternsBundle:Lessons:MilaniFactory.html.twig', ['milani'=>$milani]);
    }
   

}

