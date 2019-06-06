<?php
/**
 * Created by PhpStorm.
 * User: dmitrypliusnin
 * Date: 6/5/19
 * Time: 11:42 AM
 */

namespace Taqat\Tazman\Core\UserAccount\Domain\Service\Credentials;

/**
 * Interface CanonicalizerInterface
 * @package Taqat\Tazman\Core\UserAccount\Domain\Service\Credentials
 */
interface CanonicalizerInterface
{
    /**
     * @param string $string
     * @return string
     */
    public function canonicalize(string $string) :string;
}
