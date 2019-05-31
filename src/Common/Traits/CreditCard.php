<?php

namespace Payconn\Common\Traits;

trait CreditCard
{
    protected $creditCard;

    public function getCreditCard(): \Payconn\Common\CreditCard
    {
        return $this->creditCard;
    }

    public function setCreditCard(\Payconn\Common\CreditCard $creditCard): void
    {
        $this->creditCard = $creditCard;
    }
}
