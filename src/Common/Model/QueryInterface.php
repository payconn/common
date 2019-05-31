<?php

namespace Payconn\Common\Model;

use Payconn\Common\ModelInterface;

interface QueryInterface extends ModelInterface
{
    public function getOrderId(): string;
}
