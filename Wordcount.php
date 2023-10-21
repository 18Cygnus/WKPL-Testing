<?php

//making class
class Wordcount
{
    //func to count words in sentence
    public function countWords($sentence)
    {
        //splitting the sentence into an array of words
        return count(explode(" ", $sentence));
    }
}

?>