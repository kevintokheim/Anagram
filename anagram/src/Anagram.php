<?php
    class Anagram
    {
        function makeAnagram($input_words)
        {

            $first_word = $input_words[0];
            $second_word = $input_words[1];

            $first_string = str_split($first_word);
            $second_string = str_split($second_word);

            sort($first_array);
            sort($second_array);

            foreach ($input_words as $word) {

                if ($first_string == $second_string){

                }
                array_push($output_array, $string);
            }
            return $input_string;
        }
    }

?>
