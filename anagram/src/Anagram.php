<?php
    class Anagram
    {
        function makeAnagram($input_word1, $input_word2, $input_word3)
        {
            $input_array1 = str_split($input_word1);
            $input_array2 = str_split($input_word2);

            sort($input_array1);
            sort($input_array2);
            sort($input_array3);

            if ($input_array1 === $input_array2) {
                return $input_word2;
            } elseif ($input_array1 === $input_array3) {
                return $input_word3;
            } else {
                
            }
        }
    }

?>
