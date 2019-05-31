<?php

namespace Payconn\Common\Traits;

trait Currency
{
    protected $currency;

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }
}
