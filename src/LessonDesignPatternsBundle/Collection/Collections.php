<?php

namespace LessonDesignPatternsBundle\Collection;

class Collections 
{
    public function get()
    {
        return $this->collection();
    }
    
    public function count()
    {
        return count($this->get());
    }
    
    public function keys()
    {
        return array_keys($this->get());
    }
    
    public function removeElement($element)
    {
        $key = array_search($element, $this->get(), true);

        if ($key !== false) {
            unset($this->get()[$key]);

            return true;
        }

        return false;
    }
    
    public function containsKey($key)
    {
        return isset($this->get()[$key]);
    }
}
