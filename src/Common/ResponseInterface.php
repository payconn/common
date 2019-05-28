<?php

namespace Payconn\Common;

interface ResponseInterface
{
    public function __construct(ModelInterface $model, array $parameters);

    public function isSuccessful(): bool;

    public function getResponseMessage(): string;

    public function getResponseCode(): string;

    public function getResponseBody(): array;

    public function isRedirection(): bool;

    public function getRedirectForm(): string;

    public function getModel(): ModelInterface;
}
