<?php

namespace Payconn\Common\Model;

use Payconn\Common\ModelInterface;

interface CancelInterface extends ModelInterface
{
    public function getOrderId(): string;
}
