<?php

namespace Payconn\Common\Traits;

trait Installment
{
    protected $installment;

    public function getInstallment(): int
    {
        return $this->installment;
    }

    public function setInstallment(int $installment): void
    {
        $this->installment = $installment;
    }
}
