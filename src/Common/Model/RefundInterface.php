<?php

namespace Payconn\Common\Model;

use Payconn\Common\ModelInterface;

interface RefundInterface extends ModelInterface
{
    public function getOrderId(): string;
}
