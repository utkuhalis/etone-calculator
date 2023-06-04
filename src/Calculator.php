<?php

namespace Plugins\Calculator;

class Calculator
{
    public $total = 0;

    public function add($number)
    {
        $this->total += $number;
        return $this;
    }

    public function subtract($number)
    {
        $this->total -= $number;
        return $this;
    }

    public function multiply($number)
    {
        $this->total *= $number;
        return $this;
    }

    public function divide($number)
    {
        $this->total /= $number;
        return $this;
    }

    public function clear()
    {
        $this->total = 0;
        return $this;
    }

    public function result()
    {
        return $this->total;
    }

    public function __toString()
    {
        return (string) $this->total;
    }
}
