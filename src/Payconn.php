<?php

namespace Payconn;

use Payconn\Common\GatewayFactory;

class Payconn
{
    public static function __callStatic($method, array $parameters = [])
    {
        $factory = new GatewayFactory();

        return call_user_func_array(array($factory, $method), $parameters);
    }
}
