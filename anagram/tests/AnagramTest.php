<?php

    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {

        function test_makeAnagram_matchedLetters()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input1 = "a";
            $input2 = "a";

            //Act
            $result = $test_Anagram->makeAnagram($input1, $input2);

            //Assert
            $this->assertEquals("a", $result);
        }

        function test_makeAnagram_mismatchedLetters()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input1 = "a";
            $input2 = "b";

            //Act
            $result = $test_Anagram->makeAnagram($input1, $input2);

            //Assert
            $this->assertEquals("", $result);
        }

        function test_makeAnagram_inverseWords()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input1 = "on";
            $input2 = "no";

            //Act
            $result = $test_Anagram->makeAnagram($input1, $input2);

            //Assert
            $this->assertEquals("no", $result);
        }

    }
?>
