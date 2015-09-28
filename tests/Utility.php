<?php
use \Sarciszewski\PHPFuture as Future;

class TestSecurity extends PHPUnit_Framework_TestCase
{
    /**
     * @covers \Sarciszewski\PHPFuture\Utilty::arrayColumn()
     */
    public function testArrayColumn()
    {
        $x = [
            ['a' => 1, 'b' => 1],
            ['a' => 2, 'b' => 3],
            ['a' => 3, 'b' => 2]
        ];

        $y = [
            1 => 1,
            2 => 3,
            3 => 2
        ];

        $this->assertEquals(
            $y,
            Future\Utility::arrayColumn($x, 'b', 'a')
        );
    }
}
