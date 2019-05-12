<?php

namespace Payconn\Common;

interface GatewayInterface
{
    public function createRequest(string $class, array $parameters);
}
