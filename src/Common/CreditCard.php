<?php

namespace Payconn\Common;

class CreditCard
{
    private $holderName;

    private $number;

    private $expireYear;

    private $expireMonth;

    private $cvv;

    public function __construct($number, $expireYear, $expireMonth, $cvv)
    {
        $this->number = $number;
        $this->expireYear = $expireYear;
        $this->expireMonth = $expireMonth;
        $this->cvv = $cvv;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function getExpireYear(): string
    {
        return $this->expireYear;
    }

    public function getExpireMonth(): string
    {
        return $this->expireMonth;
    }

    public function getCvv(): string
    {
        return $this->cvv;
    }

    public function getHolderName(): string
    {
        return $this->holderName;
    }

    public function setHolderName(string $holderName): self
    {
        $this->holderName = $holderName;

        return $this;
    }
}
