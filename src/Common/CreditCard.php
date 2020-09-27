<?php

namespace Payconn\Common;

class CreditCard
{
    private $holderName;

    private $number;

    private $expireYear;

    private $expireMonth;

    private $cvv;

    public function __construct(string $number, string $expireYear, string $expireMonth, string $cvv)
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

    public function getExpireYear(string $format = 'y'): string
    {
        return $this->expireYear->format($format);
    }

    public function getExpireMonth(string $format = 'm'): string
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
