<?php

namespace Payconn\Common;

use Payconn\Common\Exception\InvalidArgumentException;

class CreditCard
{
    private string $holderName;

    private string $number;

    private \DateTime $expireYear;

    private \DateTime $expireMonth;

    private string $cvv;

    public function __construct(string $number, string $expireYear, string $expireMonth, string $cvv)
    {
        $this->number = $number;
        $this->expireYear = $this->createDateFromFormat('Y', $expireYear);
        $this->expireMonth = $this->createDateFromFormat('!m', $expireMonth);
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

    private function createDateFromFormat(string $format, string $date): \DateTime
    {
        $dateTime = \DateTime::createFromFormat($format, $date);

        if (!$dateTime) {
            throw new InvalidArgumentException('Card expiration date is invalid');
        }

        return $dateTime;
    }
}
