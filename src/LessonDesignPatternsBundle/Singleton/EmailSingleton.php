<?php

namespace LessonDesignPatternsBundle\Singleton;

use LessonDesignPatternsBundle\Service\EmailService;

abstract class EmailSingleton {
    
    /**
     *
     * @var EmailService
     */
    private static $email;
    
    /**
     * 
     * @return EmailService
     */
    public static function getEmail() 
    {
        
        if (isset(self::$email)) {
            return self::$email;
        }

        self::$email = new EmailService();
        return self::$email;
    }

}
