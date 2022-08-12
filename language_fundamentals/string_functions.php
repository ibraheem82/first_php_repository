<?php 
    // =====> substr() <=====
    // ===> Return a portion of a string

    // $output = substr('Ibraheem', 1, 3);
    // ===> to start from the back
    // $output = substr('Ibraheem', -2);
    // echo $output;


    // =====> strlen() <=====
    // ===> Return the length of a string

    // $output = strlen('omikunle');
    // echo $output;


    // =====> strpos() <=====
    // ===> Finds the position of the first occurence of a sub string

    // $output = strpos('Ibraheem Omikunle', 'O');
    // echo $output;
    

    // =====> strrpos() <=====
    // ===> Finds the position of the last occurence of a sub string

    //  $output = strrpos('Ibraheem Omikunle', 'e');
    // echo $output;


     // =====> trim() <=====
    // ===> strips or trim whitespace

    // $text = 'Good Morining                           ';
    // var_dump($text);

    // $trimmed = trim($text);
    // var_dump($trimmed);



    // =====> strtoupper() <=====
    // ===> Makes everything uppercase

    // $output = strtoupper('Omikunle');
    // echo $output;


    // =====> strtolower() <=====
    // ===> Makes everything lowercase

    // $output = strtolower('Omikunle');
    // echo $output


     // =====> ucwords() <=====
    // ===> Capitalize every word

    // $output = ucwords('omikunle ibraheem is my name ');
    // echo $output;


     // =====> str_replace() <=====
    // ===> Replace all the occurence of a searc string with a replacement

    // $text = 'Omikunle Coder';
    // $output = str_replace('Coder', 'Ibraheem', $text);
    // echo $output;


    // =====> is_string() <=====
    // ===> Check if string

    // $val = 'Ibraheem';
    // $output = is_string($val);

    // echo $output;

    // $values = array(true, false, null, 'abc', 33, '33', 22.4, '22.4','', ' ', 0, '0');
    
    // foreach($values as $value){
    //     if (is_string($value)) {
    //         echo "{$value} is a string";
    //         echo "<br>";
    //     }
    // }



    // =====> gzcompress() <=====
    // ===> Compress a string

    $string = 
    "THE WORLD'S LARGEST WEB DEVELOPER SITE
    PHP Tutorial
    PHP HOME
    PHP Intro
    PHP Install
    PHP Syntax
    PHP Comments
    PHP Variables
    PHP Echo / Print
    PHP Data Types
    PHP Strings
    PHP Numbers
    PHP Constants
    PHP Operators
    PHP If...Else...Elseif
    PHP Switch
    PHP Loops
    PHP Functions
    PHP Arrays
    PHP Superglobals
    
    PHP Forms
    PHP Form Handling
    PHP Form Validation
    PHP Form Required
    PHP Form URL/E-mail
    PHP Form Complete
    
    PHP Advanced
    PHP Date and Time
    PHP Include
    PHP File Handling
    PHP File Open/Read
    PHP File Create/Write
    PHP File Upload
    PHP Cookies
    PHP Sessions
    PHP Filters
    PHP Filters Advanced
    PHP JSON
    
    PHP OOP
    PHP What is OOP
    PHP Classes/Objects
    PHP Constructor
    PHP Destructor
    PHP Access Modifiers
    PHP Inheritance
    PHP Constants
    PHP Abstract Classes
    PHP Traits
    PHP Static Methods
    PHP Static Properties
    
    MySQL Database
    MySQL Database
    MySQL Connect
    MySQL Create DB
    MySQL Create Table
    MySQL Insert Data
    MySQL Get Last ID
    MySQL Insert Multiple
    MySQL Prepared
    MySQL Select Data
    MySQL Where
    MySQL Order By
    MySQL Delete Data
    MySQL Update Data
    MySQL Limit Data
    
    PHP XML
    PHP XML Parsers
    PHP SimpleXML Parser
    PHP SimpleXML - Get
    PHP XML Expat
    PHP XML DOM
    
    PHP - AJAX
    AJAX Intro
    AJAX PHP
    AJAX Database
    AJAX XML
    AJAX Live Search
    AJAX Poll
    
    PHP Examples
    PHP Examples
    PHP Quiz
    PHP Exercises
    PHP Certificate
    
    PHP Reference
    PHP Overview
    PHP Array
    PHP Calendar
    PHP Date
    PHP Directory
    PHP Error
    PHP Filesystem
    PHP Filter
    PHP FTP
    PHP JSON
    PHP Libxml
    PHP Mail
    PHP Math
    PHP Misc
    PHP MySQLi
    PHP Network
    PHP SimpleXML
    PHP Stream
    PHP String
    PHP Variable Handling
    PHP XML Parser
    PHP Zip
    PHP Timezones
    
    
    
    strpos() - Search For a Text Within a String
    The PHP strpos() function searches for a specific text within a string. If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.
    
    Example
    
   
    Complete PHP String Reference
    For a complete reference of all string functions, go to our complete PHP String Reference.
    
    The PHP string reference contains description and example of use, for each function!
    
    PHP Exercises
    Test Yourself W";

$compressed  = gzcompress($string);
// echo $compressed;

$original = gzuncompress($compressed);
echo $original;




?>