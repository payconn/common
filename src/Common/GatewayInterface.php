<?php

namespace Payconn\Common;

use Payconn\Common\Model\AuthorizeInterface;
use Payconn\Common\Model\CancelInterface;
use Payconn\Common\Model\CompleteInterface;
use Payconn\Common\Model\PurchaseInterface;
use Payconn\Common\Model\RefundInterface;

interface GatewayInterface
{
    public function createRequest(string $class, ModelInterface $model): ResponseInterface;

    public function authorize(AuthorizeInterface $model): ResponseInterface;

    public function complete(CompleteInterface $model): ResponseInterface;

    public function purchase(PurchaseInterface $model): ResponseInterface;

    public function refund(RefundInterface $model): ResponseInterface;

    public function cancel(CancelInterface $model): ResponseInterface;

    public function initialize(): void;
}
