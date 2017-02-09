<?php

namespace Lesson\AuctionBundle\Entity;


class Comprador 
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


