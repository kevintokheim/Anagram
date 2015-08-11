<?php
    class Anagram
    {
        function makeAnagram($input_word)
        {

            $input_string = str_split($input_word);
            $output_array = array();
            foreach ($input_string as $string) {
                array_push($output_array, $string);
            }
        }
    }

?>
