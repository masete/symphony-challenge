<?php

    namespace Tests;
    use App\Palindrome;
    use PHPUnit\Framework\TestCase;

    class PalindromeTest extends TestCase{

        public function testPalindrome (){
            $palindrome = new Palindrome;

            $this->assertInstanceOf(Palindrome::class, $palindrome);
        }
        public function testIsPalindrome()
        {
            $palindrome = new Palindrome;
    
            $this->assertTrue($palindrome->isPalindrome("ada"));
        }
        public function testIsPalindromeLowercase()
    {
        $palindrome = new Palindrome;

        $this->assertTrue($palindrome->isPalindrome("ada"));
    }

    public function testIsPalindromeAlternative()
    {
        $palindrome = new Palindrome;

        $this->assertTrue($palindrome->isPalindrome("Rotator"));
    }

    public function testIsPalindromeFalse()
    {
        $palindrome = new Palindrome;

        $this->assertFalse($palindrome->isPalindrome("adhvAnikl"));
    }

    public function testIsPalindromeFalseLowercase()
    {
        $palindrome = new Palindrome;

        $this->assertFalse($palindrome->isPalindrome("football"));
    }

    }
