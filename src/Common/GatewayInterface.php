<?php

namespace Payconn\Common;

interface GatewayInterface
{
    public function createRequest(string $class, array $parameters);

    public function authorize(array $parameters);

    public function authorizeComplete(array $parameters);

    public function purchase(array $parameters);

    public function purchaseComplete(array $parameters);

    public function void(array $parameters);

    public function refund(array $parameters);
}
