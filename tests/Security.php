<?php
use \ResonantCore\PHPFuture as Future;

class TestSecurity extends PHPUnit_Framework_TestCase
{
    /**
     * @covers \ResonantCore\PHPFuture\Security::hashEquals()
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
}