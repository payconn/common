<?php

namespace Payconn\Common\Traits;

trait OrderId
{
    protected $orderId;

    public function getOrderId(): string
    {
        return $this->orderId;
    }

    public function setOrderId(string $orderId): void
    {
        $this->orderId = $orderId;
    }

    public function generateOrderId(): void
    {
        $this->setOrderId(md5(uniqid(mt_rand(), true)).time());
    }
}
