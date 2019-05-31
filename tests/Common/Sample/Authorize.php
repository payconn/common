<?php

namespace Payconn\Tests\Common\Sample;

use Payconn\Common\AbstractModel;
use Payconn\Common\Model\AuthorizeInterface;
use Payconn\Common\Traits\Amount;
use Payconn\Common\Traits\CreditCard;
use Payconn\Common\Traits\Currency;
use Payconn\Common\Traits\Installment;
use Payconn\Common\Traits\ReturnUrl;

class Authorize extends AbstractModel implements AuthorizeInterface
{
    use Amount;
    use Installment;
    use ReturnUrl;
    use CreditCard;
    use Currency;
}
