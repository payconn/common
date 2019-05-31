<?php

namespace Payconn\Common\Traits;

trait Amount
{
    protected $amount;

    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }
}
