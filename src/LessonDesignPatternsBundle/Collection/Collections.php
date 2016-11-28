<?php

namespace LessonDesignPatternsBundle\Collection;

class Collections 
{
    private $data;
    
    public function __construct(array $data)
    {
        $this->data = $data;
    }
    
    public function get()
    {
        return $this->data;
    }
    
    public function count()
    {
        return count($this->data);
    }
    
    public function keys()
    {
        return array_keys($this->data);
    }
    
    public function removeElement($element)
    {
        $key = array_search($element, $this->data, true);

        if ($key !== false) {
            unset($this->data[$key]);

            return true;
        }

        return false;
    }
    
    public function containsKey($key)
    {
        return isset($this->data[$key]);
    }
}
