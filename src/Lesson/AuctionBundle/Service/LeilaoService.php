<?php

namespace Lesson\AuctionBundle\Service;

use Lesson\AuctionBundle\Entity\Item;
use Lesson\AuctionBundle\Entity\Comprador;
use Lesson\AuctionBundle\Entity\Lance;
use Lesson\AuctionBundle\Entity\Avaliador;

class LeilaoService 
{
    
    public function fazerLeilaoDoPolystation ()
    {
        $item = new Item("polystation");
        $matheus = new Comprador("Matheus");
        $enrico = new Comprador("Enrico");
        $alison = new Comprador("Alison");
        $rodrigo = new Comprador("Rodrigo");
        
        $lance = new Lance($item, $enrico, 20);
        $lance1 = new Lance($item, $matheus, 250000);
        $lance2 = new Lance($item, $rodrigo, 5);
        $lance3 = new Lance($item, $alison, 0.5);
        
        $a1 = new Avaliador();
        $a1->setLance($lance)
                ->setLance($lance1)
                ->setLance($lance2)
                ->setLance($lance3);
        
      
        return $a1->avaliacao();
    }
}
