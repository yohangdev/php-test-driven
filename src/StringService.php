<?php

class StringService
{
    public static function isPalindrome($word)
    {
        $toLowercase = strtolower($word);

        $wordLength  = strlen($toLowercase);

        for ($n = 0; $n < $wordLength; $n++) {
            if ($toLowercase[$n] !== $toLowercase[$wordLength-$n-1]) {
                return false;
            }
        }

        return true;
    }
}
