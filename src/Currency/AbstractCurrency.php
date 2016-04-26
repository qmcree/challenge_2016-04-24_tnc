<?php

namespace Challenge\Currency;

abstract class AbstractCurrency
{
    public static $symbol;
    protected $amount;

    public function __construct($amount = null)
    {
        $this->amount = $amount;
    }

    public function getAmount()
    {
        return $this->amount;
    }
}