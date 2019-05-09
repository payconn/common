<?php

namespace Payconn\Common;

class GatewayFactory
{
    public static function create(string $name, Client $httpClient, array $parameters)
    {
        return new ${'\\Payconn\\'.$name.'\\'.$name}($httpClient, $parameters);
    }
}
