<?php

namespace Payconn\Common;

interface RequestInterface
{
    public function send(): ResponseInterface;
}
