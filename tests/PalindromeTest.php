<?php

    namespace Tests;
    use APP\Palindrome;
    use PhpUnit\Framework\TestCase;

    class PalindromeTest extends TestCase{

        public function testPalindrome (){
            $palindrome = new Palindrome;

            $this->assertInstanceOf(Palindrome::class, $palindrome);
        }

    }




;