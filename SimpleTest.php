<?php
use PHPUnit\Framework\TestCase;

//calling Wordcount.php
require_once "Wordcount.php";

//making class that extends testcase framework
class SimpleTest extends TestCase {
    //init function to testCountwords
    public function testCountWords() {
        //making wordcount object
        $Wc = new WordCount();

        //sentence example that will be tested amount its words
        $TestSentence = "My name is Joko";
        //calling 'countWords' method to count the words
        $WordCount = $Wc->countWords($TestSentence);

        //checks is the amount of words is equal to 4
        $this->assertEquals(4, $WordCount);
    }
}


?>