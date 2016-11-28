<?php

namespace LessonDesignPatternsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class exampleFactoryController extends Controller
{
    public function indexAction() 
    {
        return $this->render('LessonDesignPatternsBundle:Lessons:Factory.html.twig');
    }
}
