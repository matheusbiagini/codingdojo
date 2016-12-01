<?php

namespace LessonDesignPatternsBundle\Factory;

use LessonDesignPatternsBundle\Collection\CollectionClient;


class ClientFactory {
    
    public function createClient() {
        
        $client = new CollectionClient();
        return $client;
        
    }
    
    
}
