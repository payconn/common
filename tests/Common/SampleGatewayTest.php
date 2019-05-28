<?php

namespace Payconn\Tests\Common;

use Payconn\Common\CreditCard;
use Payconn\Tests\Common\Sample\Authorize;
use Payconn\Tests\Common\Sample\Gateway;
use Payconn\Tests\Common\Sample\Token;
use PHPUnit\Framework\TestCase;

class SampleGatewayTest extends TestCase
{
    public function testAuthorize()
    {
        $token = new Token('payconn', '1234567');
        $creditCard = new CreditCard('4111111111111111', '2023', '08', '123');
        $authorize = (new Authorize($token))
            ->setCurrency('TRY')
            ->setAmount(100)
            ->setCreditCard($creditCard)
            ->setTestMode(true);
        $gateway = new Gateway($token);
        $response = $gateway->authorize($authorize);
        $this->assertTrue($response->isSuccessful());
        $this->assertFalse($response->isRedirection());
        $this->assertEquals('Successful', $response->getResponseMessage());
        $this->assertEquals('00', $response->getResponseCode());
        $this->assertArrayHasKey('ReturnCode', $response->getResponseBody());
        $this->assertArrayHasKey('ReturnMessage', $response->getResponseBody());
    }
}
