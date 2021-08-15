<?php

namespace App\Calculator\Services;

use App\Calculator\Contracts\OperationInterface;
use App\Calculator\OperationAbstract;


/**
 * Addition
 */
class Addition extends OperationAbstract implements OperationInterface
{    
  
    
    /**
     * calculate
     *
     * @return float
     */
    public function calculate() : float
    {
        if (count($this->operands) === 0) {
            throw new \Exception('No operands supplied');
        }
        return array_sum($this->operands);
    }
}
