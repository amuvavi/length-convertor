<?php
namespace App\LengthUnitsConversion\Services;

use App\LengthUnitsConversion\Contracts\LengthConvertorInterface;
class DistanceConvertor implements LengthConvertorInterface
{

    /**
     * value
     *
     * @var mixed
     */
    protected $value;
    
    /**
     * baseUnit
     *
     * @var mixed
     */
    protected $baseUnit;
    
    /**
     * fromUnit
     *
     * @var mixed
     */
    protected $fromUnit;

    /**
     * @param string $quantity
     * @param string $unit
     */
    public function __construct($value, $baseUnit, $fromUnit)
    {
        $this->value = $value;
        $this->baseUnit = $baseUnit;
        $this->fromUnit = $fromUnit;
    }

    /**
     * @param $unit
     * @return $this
     */
    public function convert() : float
    {
        return ($this->value * $this->getConversion($this->fromUnit)) / $this->getConversion($this->baseUnit);
    }


    /**
     * @param $unit
     * @return mixed
     * @throws \Exception
     */
    public function getConversion(string $unit)
    {
        if (!isset(config('length.formulae')[strtoupper($unit)])) {
            throw new \Exception('The conversion unit supplied is invalid');
        }

        return config('length.formulae')[strtoupper($unit)];
    }

}
