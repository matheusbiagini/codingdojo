<?php

namespace Lesson\AuctionBundle\Entity;

class Lance 
{
    private $valor;
    private $item;
    private $comprador;
    
    public function __construct(Item $item, Comprador $comprador, $valor) 
    {
        $this->item = $item;
        $this->comprador = $comprador;
        $this->valor = $valor;
    }
    
    public function getItem()
    {
        return $this->item;
    }
    
    public function getComprador()
    {
        return $this->comprador;
    }
    
    public function getValor() 
    {
        return $this->valor;
    }
    
}
