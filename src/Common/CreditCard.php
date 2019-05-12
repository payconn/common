<?php

namespace Payconn\Common;

class CreditCard
{
    private $holderName;

    private $number;

    private $expireYear;

    private $expireMonth;

    private $cvv;

    public function __construct($holderName, $number, $expireYear, $expireMonth, $cvv)
    {
        $this->holderName = $holderName;
        $this->number = $number;
        $this->expireYear = $expireYear;
        $this->expireMonth = $expireMonth;
        $this->cvv = $cvv;
    }

    public function getHolderName()
    {
        return $this->holderName;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function getExpireYear()
    {
        return $this->expireYear;
    }

    public function getExpireMonth()
    {
        return $this->expireMonth;
    }

    public function getCvv()
    {
        return $this->cvv;
    }
}
