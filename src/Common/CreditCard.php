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
        $this->expireYear = \DateTime::createFromFormat('Y', $expireYear);
        $this->expireMonth = \DateTime::createFromFormat('!m', $expireMonth);
        $this->cvv = $cvv;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function getExpireYear($format = 'y'): string
    {
        return $this->expireYear->format($format);
    }

    public function getExpireMonth($format = 'm'): string
    {
        return $this->expireMonth->format($format);
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
