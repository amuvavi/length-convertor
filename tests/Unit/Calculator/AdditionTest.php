<?php

namespace Tests\Unit\calculator;

use App\Calculator\Services\Addition;
use Exception;
use Tests\TestCase;

class AdditionTest extends TestCase
{

    public function test_adds_up_given_operands()
    {
        $addition = new Addition;
        $addition->setOperands([3, 9, 2]);

        $this->assertEquals(14, $addition->calculate());
    }

    public function test_no_given_operands_throws_exception_when_adding()
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('No operands supplied');
        $addition = new Addition;
        $addition->setOperands([]);
        $addition->calculate();
    }
}
