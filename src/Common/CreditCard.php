<?php

namespace Payconn\Common;

class CreditCard
{
    private $ownerName;

    private $number;

    private $expireYear;

    private $expireMonth;

    private $cvv;

    public function __construct(string $ownerName, $number, $expireYear, $expireMonth, $cvv)
    {
        $this->ownerName = $ownerName;
        $this->number = $number;
        $this->expireMonth = $expireMonth;
        $this->expireYear = $expireYear;
        $this->cvv = $cvv;
    }

    public function getOwnerName(): string
    {
        return $this->ownerName;
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
