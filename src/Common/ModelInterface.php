<?php

namespace Payconn\Common;

interface ModelInterface
{
    public function __construct(TokenInterface $token);

    public function getToken(): TokenInterface;

    public function setTestMode(bool $testMode);

    public function isTestMode(): bool;
}
