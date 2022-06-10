<?php

/**
 * A palindrome according to the oxford dictionary is a 
 * word, phrase, or sequence that reads the same backwards as forwards, 
 * e.g. madam or nurses run.
 */

class Palindrome
{
    /**
     * we get our string $word, change it to lowercase and compares to its reverse
     * using strrev function. if they match, then its a palindrome.
     *
     * @param string $word
     * @return bool
     */
    public function isPalindrome(string $word): bool
    {
        return strtolower($word) === strrev(strtolower($word));
    }
}
;
