<?php

namespace LessonDesignPatternsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class exampleStrategyController extends Controller
{

    public function indexAction()
    {
        return $this->render('LessonDesignPatternsBundle:Lessons:Strategy.html.twig');
    }

    public function emailHomemAction()
    {

        $msg = $this->get('homem.strategy')->setName('Wesley')->setHtml('Banner')->setEmail('wesley@email.com');

        return $this->render('LessonDesignPatternsBundle:Lessons:StrategyExample.html.twig', [
                'msg' => $msg->send('', '')
        ]);
    }

    public function emailMulherAction() 
    {
        $msg = $this->get('mulher.strategy')->setName('Milani')->setHtml('EmailMarketing')->setEmail('milani@email.com');
        
        return $this->render('LessonDesignPatternsBundle:Lessons:StrategyExample.html.twig', [
                'msg' => $msg->send('', '')
        ]);
    }
    
    public function genderAction()
    {
        $message = $this->get('gender.man.strategy')->setName('Wesley')->setHtml('Meu Ovo')->setEmail('milani@email.com')->send();
        
        return $this->render('LessonDesignPatternsBundle:Lessons:StrategyExample.html.twig', [
                'msg' => $message
        ]);
    }
}
