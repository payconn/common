<?php

namespace Payconn\Common;

interface ResponseInterface
{
    public function isSuccessful(): bool;

    public function isRedirect(): bool;

    public function getResponseCode(): string;

    public function getResponseMessage(): string;

    public function getResponseBody(): array;

    public function getRedirectUrl(): ?string;
}
