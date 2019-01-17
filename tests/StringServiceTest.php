<?php

use PHPUnit\Framework\TestCase;

class StringServiceTest extends TestCase
{
    public function testPalindromeOne(): void
    {
        $service = new StringService();

        $input   = 'iGattiNonAvevanoCugini';

        $result  = $service->isPalindrome($input);

        $this->assertFalse($result);
    }

    public function testPalindromeTwo(): void
    {
        $service = new StringService();

        $input   = 'iTopiNonAvevanoNipoti';

        $result  = $service->isPalindrome($input);

        $this->assertTrue($result);
    }
}
