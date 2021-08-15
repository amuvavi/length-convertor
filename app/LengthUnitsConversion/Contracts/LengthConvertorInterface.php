<?php

namespace App\LengthUnitsConversion\Contracts;

interface LengthConvertorInterface
{    
    /**
     * convert
     *
     * @return float
     */
    public function convert() : float;  
      
    /**
     * getConversion
     *
     * @param  mixed $unit
     * @return void
     */
    public function getConversion(string $unit);
}
