<?php

namespace Payconn\Common;

interface ModelInterface
{
    public function __construct(TokenInterface $token);

    public function getToken(): TokenInterface;

    public function setTestMode(bool $testMode): ModelInterface;

    public function isTestMode(): bool;

    public function setBaseUrl(string $baseUrl): ModelInterface;

    public function getBaseUrl(): string;
}
