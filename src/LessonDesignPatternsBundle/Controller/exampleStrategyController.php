<?php

namespace LessonDesignPatternsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class exampleStrategyController extends Controller
{
    public function indexAction() 
    {
        return $this->render('LessonDesignPatternsBundle:Lessons:Strategy.html.twig');
    }
}