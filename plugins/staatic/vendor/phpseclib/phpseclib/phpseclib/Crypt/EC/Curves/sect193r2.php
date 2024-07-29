<?php

namespace Staatic\Vendor\phpseclib3\Crypt\EC\Curves;

use Staatic\Vendor\phpseclib3\Crypt\EC\BaseCurves\Binary;
use Staatic\Vendor\phpseclib3\Math\BigInteger;
class sect193r2 extends Binary
{
    public function __construct()
    {
        $this->setModulo(193, 15, 0);
        $this->setCoefficients('0163F35A5137C2CE3EA6ED8667190B0BC43ECD69977702709B', '00C9BB9E8927D4D64C377E2AB2856A5B16E3EFB7F61D4316AE');
        $this->setBasePoint('00D9B67D192E0367C803F39E1A7E82CA14A651350AAE617E8F', '01CE94335607C304AC29E7DEFBD9CA01F596F927224CDECF6C');
        $this->setOrder(new BigInteger('010000000000000000000000015AAB561B005413CCD4EE99D5', 16));
    }
}
