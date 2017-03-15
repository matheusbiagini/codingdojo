<?php

namespace LessonTddBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LessonTddBundle:Default:index.html.twig');
    }
}
