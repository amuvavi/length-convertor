<?php

namespace App\Calculator\Contracts;

interface OperationInterface
{    
    /**
     * calculate
     *
     * @return float
     */
    public function calculate() : float;
}
