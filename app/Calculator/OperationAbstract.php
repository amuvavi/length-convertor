<?php

namespace App\Calculator;


abstract class OperationAbstract
{
 /**
     * operands
     *
     * @var mixed
     */
    protected $operands;
    
    /**
     * setOperands
     *
     * @param  mixed $operands
     * @return void
     */
    public function setOperands(array $operands) : void
    {
        $this->operands = $operands;
    }

}
 