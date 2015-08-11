<?php

    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {

        function test_makeAnagram_letters()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input = "bread";

            //Act
            $result = $test_Anagram->makeAnagram($input);

            //Assert
            $this->assertEquals(["b", "r", "e", "a", "d"], $result);
        }

        function test_makeAnagram_twoStrings()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input = ['bread', 'table'];

            //Act
            $result = $test_Anagram->makeAnagram($);

            //Assert
            $this->assertEquals(true, $result);
        }
    }
?>
