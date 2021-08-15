<?php

namespace Tests\Unit\LengthUnitConvertor;

use App\LengthUnitsConversion\Services\DistanceConvertor;
use Tests\TestCase;

class DistanceConvertorTest extends TestCase
{

    public function test_converts_given_operands_with_inputs()
    {
        $converted = new DistanceConvertor(5, 'yard', 'metre');

        $this->assertEquals(5.468066491688539, $converted->convert());
    }
}
