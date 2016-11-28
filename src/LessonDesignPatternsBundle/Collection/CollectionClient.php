<?php

namespace LessonDesignPatternsBundle\Collection;

use LessonDesignPatternsBundle\Entity\Client;


class CollectionClient extends Collections
{
    public function __construct()
    {
       parent::__construct($this->getMap()); 
    }

    public function getMap() 
    {
        return [
            new Client('Matheus Biagini', 'matheus.dias@hypnobox.com.br', '31'),
            new Client('Joilson Resende', 'jojo@hypnobox.com.br', '22'),
            new Client('Wesley', 'wesley@hypnobox.com.br', '20'),
            new Client('Vinicius Toqueti', 'vini.toqueti@hypnobox.com.br', '45'),
            new Client('Thiago Stipp', 'stipp@hypnobox.com.br', '38'),
        ];
    }
}
