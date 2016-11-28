<?php

namespace LessonDesignPatternsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class exampleSingletonController extends Controller
{
    public function indexAction() 
    {
        return $this->render('LessonDesignPatternsBundle:Lessons:Singleton.html.twig');
    }
}