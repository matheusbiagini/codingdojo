<?php

namespace LessonDesignPatternsBundle\Collection;

use LessonDesignPatternsBundle\Entity\Client;

class CollectionClient extends Collections
{
    public function collection()
    {
       return [
            new Client('Matheus Biagini', 'matheus.dias@hypnobox.com.br', '31'),
            new Client('Joilson Resende', 'jojo@hypnobox.com.br', '22'),
            new Client('Wesley', 'wesley@hypnobox.com.br', '20'),
            new Client('Vinicius Toqueti', 'vini.toqueti@hypnobox.com.br', '45'),
            new Client('Thiago Stipp', 'stipp@hypnobox.com.br', '38'),
            new Client('Carol', 'carol@hypnobox.com.br', '18'),
            new Client('Eduardo', 'eduardo@hypnobox.com.br', '19'),
            new Client('Dani', 'dani@hypnobox.com.br', '19'),
            new Client('Milani', 'milani@hypnobox.com.br', '39'),
       ]; 
    }
    
    public function getWesley() {
        
        return $this->collection()[2];
        
    }
    
    public function getMilani() {
        
        return $this->collection()[8];
    }
}
