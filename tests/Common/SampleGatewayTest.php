<?php

namespace Payconn\Tests\Common;

use Payconn\Common\CreditCard;
use Payconn\Tests\Common\Sample\Gateway;
use Payconn\Tests\Common\Sample\Token;
use PHPUnit\Framework\TestCase;

class SampleGatewayTest extends TestCase
{
    public function testAuthorize()
    {
        $token = new Token('payconn', '1234567');
        $creditCard = new CreditCard('Murat SAC', '4111111111111111', '2023', '08', '123');
        $gateway = new Gateway($token);
        $response = $gateway->authorize([
            'creditCard' => $creditCard,
            'price' => 100,
            'installment' => 3,
        ]);
        $this->assertTrue($response->isSuccessful());
        $this->assertFalse($response->isRedirection());
        $this->assertEquals('Successful', $response->getResponseMessage());
        $this->assertEquals('00', $response->getResponseCode());
        $this->assertEmpty($response->getRedirectForm());
        $this->assertArrayHasKey('ReturnCode', $response->getResponseBody());
        $this->assertArrayHasKey('ReturnMessage', $response->getResponseBody());
    }
}
