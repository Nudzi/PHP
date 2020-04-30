<?php
//private can be used and called ONLY in their class
//and if we want do print some propertie we call function that containts properties we want

class Person{
    //constants
    const AVG_YEAR_LIFE = 80; 
    //properties
    private $firstName;
    private $lastName;
    protected $yearOfBirth;
    
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
}

$myAuthor = new Author("Author first name", "Author last name", 2000);
echo $myAuthor->getCompleteName();