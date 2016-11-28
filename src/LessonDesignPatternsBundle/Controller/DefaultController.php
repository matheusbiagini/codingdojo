<?php

namespace LessonDesignPatternsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LessonDesignPatternsBundle:Lessons:Default.html.twig');
    }
    
    public function listClientAction()
    {
        $clients = $this->get('lesson_design_patterns.example')->getClients();
        
        return $this->render('LessonDesignPatternsBundle:Lessons:ListClient.html.twig', ['clients' => $clients]);
    }
}
