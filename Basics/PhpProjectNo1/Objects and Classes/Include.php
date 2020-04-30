<?php
include "Person.php";//or we can transfer this line to author class
                    //it will have the same effect
include_once "Author.php";//include_once because AUTHOR already contains PERSON

require 'Random.php'; //
//REQUIRE says that file MUST have require file we type, for execute this file.
//but if it is INCLUDE and do not exist, this file will STLL proceed and execute.
$myAuthor = new Author("Author first name", "Author last name", 2000);
echo $myAuthor->getCompleteName();


