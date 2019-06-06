<?php
/**
 * Created by PhpStorm.
 * User: dmitrypliusnin
 * Date: 6/5/19
 * Time: 11:58 AM
 */

namespace Taqat\Tazman\Core\UserAccount\Domain\Service\Credentials;

/**
 * Class Canonicalizer
 * @package Taqat\Tazman\Core\UserAccount\Domain\Service\Credentials
 */
class Canonicalizer implements CanonicalizerInterface
{
    /**
     * @param string $string
     * @return string
     */
    public function canonicalize(string $string): string
    {
        $encoding = mb_detect_encoding($string);
        $result = $encoding
            ? mb_convert_case($string, MB_CASE_LOWER, $encoding)
            : mb_convert_case($string, MB_CASE_LOWER)
        ;

        return $result;
    }
}
