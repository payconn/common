<?php

namespace Payconn\Common\Model;

use Payconn\Common\CreditCard;
use Payconn\Common\ModelInterface;

interface PurchaseInterface extends ModelInterface
{
    public function getAmount(): float;

    public function getInstallment(): int;

    public function getCurrency(): string;

    public function getCreditCard(): CreditCard;
}
