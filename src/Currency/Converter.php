<?php

namespace Challenge\Currency;

class Converter
{
    protected $from, $to;
    
    public function __construct(AbstractCurrency $from, AbstractCurrency $to)
    {
        $this->from = $from;
        $this->to = $to;
    }
    
    public function convert()
    {
        return $this->from->getAmount() * $this->rate();
    }
    
    protected function rate()
    {
        // call Web service to get rate...
    }
}