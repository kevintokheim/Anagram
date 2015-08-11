<?php

    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {

        function test_makeAnagram_oneLetter()
        {
            // Arrange
            $test_Anagram = new Anagram;
            $input = "b";

            // Act
            $result = $test_Anagram->makeAnagram($input);

            // Assert
            $this->assertEquals("b", $result);
        }
    }
?>
