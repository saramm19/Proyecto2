<?php

namespace Staatic\Vendor\phpseclib3\Crypt\EC\Formats\Signature;

use Staatic\Vendor\phpseclib3\File\ASN1 as Encoder;
use Staatic\Vendor\phpseclib3\File\ASN1\Maps\EcdsaSigValue;
use Staatic\Vendor\phpseclib3\Math\BigInteger;
abstract class ASN1
{
    public static function load($sig)
    {
        if (!is_string($sig)) {
            return \false;
        }
        $decoded = Encoder::decodeBER($sig);
        if (empty($decoded)) {
            return \false;
        }
        $components = Encoder::asn1map($decoded[0], EcdsaSigValue::MAP);
        return $components;
    }
    /**
     * @param BigInteger $r
     * @param BigInteger $s
     */
    public static function save($r, $s)
    {
        return Encoder::encodeDER(compact('r', 's'), EcdsaSigValue::MAP);
    }
}
