<?php
/**
 * Created by PhpStorm.
 * User: dmitrypliusnin
 * Date: 6/5/19
 * Time: 12:00 PM
 */

namespace Taqat\Tazman\Core\UserAccount\Domain\Service\Credentials;


class PasswordEncoder implements PasswordEncoderInterface
{
    /**
     * @param string $raw
     * @param string $salt
     * @return string
     */
    public function encodePassword(string $raw, string $salt): string
    {
        $options = ['salt' => $salt];

        return password_hash($raw, PASSWORD_BCRYPT, $options);
    }

    /**
     * @param string $raw
     * @param string $encoded
     * @param string $salt
     * @return bool
     */
    public function isPasswordValid(string $raw, string $encoded, string $salt): bool
    {
        return password_verify($raw, $encoded);
    }
}
