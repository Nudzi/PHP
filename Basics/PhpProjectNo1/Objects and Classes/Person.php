<?php

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

