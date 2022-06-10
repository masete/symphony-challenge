<?php

namespace Tests;

use App\Palindrome;

use PHPUnit\Framework\TestCase;

class PalindromeTest extends TestCase
{
    public function testPalindrome()
    {
        $palindrome = new Palindrome;

        $this->assertInstanceOf(Palindrome::class, $palindrome);
    }

    public function testIsPalindrome()
    {
        $palindrome = new Palindrome;

        $this->assertTrue($palindrome->isPalindrome("Ada"));
    }

    public function testIsPalindromeLowercase()
    {
        $palindrome = new Palindrome;

        $this->assertTrue($palindrome->isPalindrome("ada"));
    }

    public function testIsPalindromeAlternative()
    {
        $palindrome = new Palindrome;

        $this->assertTrue($palindrome->isPalindrome("madam"));
    }

    public function testIsPalindromeFalse()
    {
        $palindrome = new Palindrome;

        $this->assertFalse($palindrome->isPalindrome("mandelaHG"));
    }

    public function testIsPalindromeFalseLowercase()
    {
        $palindrome = new Palindrome;

        $this->assertFalse($palindrome->isPalindrome("journalist"));
    }
}
