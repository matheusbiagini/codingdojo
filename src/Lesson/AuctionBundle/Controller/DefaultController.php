<?php

namespace Lesson\AuctionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LessonAuctionBundle:Default:index.html.twig');
    }
    
    public function toDoAuctionAction()
    {
        
        
        $avaliacao = $this->getLeilao()->fazerLeilaoDoPolystation();
        
        return $this->render('LessonAuctionBundle:Auction:auction.html.twig',
             ['avaliacao'=> $avaliacao]);
    }
    
    /**
     * 
     * @return \Lesson\AuctionBundle\Service\LeilaoService
    */
    public function getLeilao()
    {
        return $this->get("lesson_auction.leilao"); 
    }
    
}
