<?php

class Author extends Person{

    public static $popular = "19th";//MUST HAVE VALUE when declared
    private $type = "drama";
    function getFirstName(){
        echo 'Author->getFirstName()'."\n";
        return $this->firstName.PHP_EOL;//new line
    }
    public function getCompleteName(){
       //this line won't do, because properties are private
       //return $this->firstName." ".$this->lastName." ".$this->type." ";
        return $this->getFullName()." ".$this->type." ";
    }
    public static function getWhenAuthorWasPopular(){
        //return static in function by SELF word
        return self::$popular;
        //we use PARENT from inhereted prop for static
        //return parent::$staticMemberFromInheretedClass;
    }
}