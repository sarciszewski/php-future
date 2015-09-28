<?php
use \Sarciszewski\PHPFuture as Future;

class TestSecurity extends PHPUnit_Framework_TestCase
{
    /**
     * @covers \Sarciszewski\PHPFuture\Security::hashEquals()
     */
    public function testHashEquals()
    {
        $a = 'd4ef98335dc5512500ea74a70a26dbd2759acc0ac116f0d747d05848a8365da9';
        $b = 'd4ef98335dc5512500ea74a70a26dbd2759acc0ac116f0d747d05848a8365da9';
        
        // Obvious test case:
        $this->assertTrue(\hash_equals($a, $b));
        
        $a = 'd4ef98335dc5512500ea74a70a26dbd2759acc0ac116f0d747d05848a8365da9';
        $b = 'd4ef98335dc5512500ea74a70a26dbd2759acc0ac116f0d747d05848a8365da1';
        
        $this->assertFalse(\hash_equals($a, $b));
    }

    /**
     * @covers \Sarciszewski\PHPFuture\Security::pbkdf2()
     * ref https://www.ietf.org/rfc/rfc6070.txt
     */
    public function testPBKDF2()
    {
        $a = Future\Security::pbkdf2("sha1", "password", "salt", 2, 20, true);
        $this->assertEquals(
            $a,
            hex2bin('ea6c014dc72d6f8ccd1ed92ace1d41f0d8de8957')
        );

        $b = Future\Security::pbkdf2("sha1", "password", "salt", 2, 20, false);
        $this->assertEquals(
            $b,
            'ea6c014dc72d6f8ccd1ed92ace1d41f0d8de8957'
        );

        
        
    }
}
