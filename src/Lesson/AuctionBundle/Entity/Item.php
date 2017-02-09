<?php

namespace Lesson\AuctionBundle\Entity;

class Item 
{
    private $nome;
    
    public function __construct($nome) 
    {
        $this->nome = $nome;
    }
    
    public function getNome()
    {
        return $this->nome;
    }    
   
}
