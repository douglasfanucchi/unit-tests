<?php

namespace Project\Math;

use PHPUnit\Framework\TestCase;

class SumTest extends TestCase {
    public function testSumTwoNumbers() {
        $sum = new Sum();

        $n1 = 10;
        $n2 = 90;

        $sum->setNum1($n1);
        $sum->setNum2($n2);

        $this->assertEquals($n1 + $n2, $sum->exec());
    }
}
