<?php
/**
 * Created by PhpStorm.
 * User: dmitrypliusnin
 * Date: 6/5/19
 * Time: 11:48 AM
 */

namespace Taqat\Tazman\Core\UserAccount\Domain\Service\Credentials;

/**
 * Interface PasswordEncoderInterface
 * @package Taqat\Tazman\Core\UserAccount\Domain\Service\Credentials
 */
interface PasswordEncoderInterface
{
    /**
     * @param string $raw
     * @param string $salt
     * @return string
     */
    public function encodePassword(string $raw, string $salt) :string;

    /**
     * @param string $raw
     * @param string $encoded
     * @param string $salt
     * @return bool
     */
    public function isPasswordValid(string $raw, string $encoded, string $salt): bool;
}
