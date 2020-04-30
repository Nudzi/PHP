<?php
//protected properties can be use only in classes, 
//and if we want to print some propertie we call function that containts properties we want
//but we can normally use properties in inherited class
//PROTECTED FUNCTIONS can be called by PUBLIC ones
class Person{
    //constants
    const AVG_YEAR_LIFE = 80; //all capital, ccan be used for equations
    //                         //but no use members of class
    //properties
    protected $firstName;
    protected $lastName;
    protected $yearOfBirth;
    
    //methods
    function __construct($tempFirst = "", $tempLast = "", $tempBirth = "") {
        $this->firstName = $tempFirst;
        $this->lastName = $tempLast;
        $this->yearOfBirth = $tempBirth;

    }
    function getFirstName(){//we can set to public, but all functions are public by default
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

    protected $type = "drama";
    function getFirstName(){
        echo 'Author->getFirstName()'."\n";
        return $this->firstName.PHP_EOL;//new line
    }
    public function getCompleteName(){
       return $this->firstName." ".$this->lastName." ".$this->type." \nFrom protected function: \n".$this->getFullName().PHP_EOL;
       //can access to prop inside other classes
    }
}

$myAuthor = new Author("Author first name", "Author last name", 2000);
echo $myAuthor->getCompleteName();//overwrites person function, it would call person one
//echo $myAuthor->getFullName();//can't because it is protected!
