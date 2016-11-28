<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace LessonDesignPatternsBundle\Service;

use LessonDesignPatternsBundle\Collection\CollectionClient;

/**
 * Description of ExampleService
 *
 * @author matheusbiagini
 */
class ExampleService 
{
    private $collectionClient;
    
    public function __construct(CollectionClient $collectionClient) 
    {
        $this->collectionClient = $collectionClient;
    }
    
    public function getClients()
    {
        return $this->collectionClient->get();
    }
}
