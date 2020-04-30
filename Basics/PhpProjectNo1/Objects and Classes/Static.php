<?php
//static properties MUST relay only on STATIC ones
//MUST HAVE VALUE when declared
//return self::$.. for class, inhereted - parent
//echo Author::$popular.PHP_EOL;//prop
//echo Author::getWhenAuthorWasPopular();//function
class Person{
    //constants
    const AVG_YEAR_LIFE = 80; 
    //properties
    private $firstName;
    private $lastName;
    protected $yearOfBirth;
    static $staticMemberFromInheretedClass = "Value";
    //methods
    function __construct($tempFirst = "", $tempLast = "", $tempBirth = "") {
        $this->firstName = $tempFirst;
        $this->lastName = $tempLast;
        $this->yearOfBirth = $tempBirth;

    }
    function getFirstName(){
        echo 'Person->getFirstName()'."\n";
        return $this->firstName.PHP_EOL;
    }
    public function setFirstName($tempName){
        $this->firstName = $tempName;    
    }
    protected function getFullName(){
        return $this->firstName." ".$this->lastName.PHP_EOL;
    }
    
}
//inheritance
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

$myAuthor = new Author("Author first name", "Author last name", 2000);
echo Author::$popular.PHP_EOL;//prop
echo Author::getWhenAuthorWasPopular();//function