<?php
    class Anagram
    {

        function makeAnagram($input_word1, $input_word2)
        {

            $input_array_of_words = explode(" ", $input_word2);

            $input_array1 = str_split($input_word1);

            sort($input_array1);


            foreach ($input_array_of_words as $word) {
                $word_array = str_split($word);
                sort($word_array);
                var_dump($word_array);
                var_dump($input_array1);
            if ($input_array1 === $word_array) {
                return $word;
            }

            }
        }
            
        }

?>
