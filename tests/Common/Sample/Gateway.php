<?php

namespace Payconn\Tests\Common\Sample;

use Payconn\Common\AbstractGateway;
use Payconn\Common\BaseUrl;
use Payconn\Common\Model\AuthorizeInterface;
use Payconn\Common\Model\CancelInterface;
use Payconn\Common\Model\CompleteInterface;
use Payconn\Common\Model\PurchaseInterface;
use Payconn\Common\Model\RefundInterface;
use Payconn\Common\ResponseInterface;

class Gateway extends AbstractGateway
{
    public function authorize(AuthorizeInterface $authorize): ResponseInterface
    {
        return $this->createRequest(AuthorizeRequest::class, $authorize);
    }

    public function purchase(PurchaseInterface $purchase): ResponseInterface
    {
        // TODO: Implement purchase() method.
    }

    public function complete(CompleteInterface $complete): ResponseInterface
    {
        // TODO: Implement purchaseComplete() method.
    }

    public function refund(RefundInterface $refund): ResponseInterface
    {
        // TODO: Implement refund() method.
    }

    public function cancel(CancelInterface $model): ResponseInterface
    {
        // TODO: Implement cancel() method.
    }

    public function initialize(): void
    {
        $this->setBaseUrl((new BaseUrl())
            ->setProdUrls('API_URL', 'SECURE_URL')
            ->setTestUrls('API_URL', 'SECURE_URL'));
    }
}
