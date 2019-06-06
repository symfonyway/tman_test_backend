<?php
/**
 * Created by PhpStorm.
 * User: dmitrypliusnin
 * Date: 6/5/19
 * Time: 2:52 PM
 */

namespace Taqat\Tazman\Core\UserAccount\Domain\Service\Authenticator;

use Taqat\Tazman\Core\UserAccount\Domain\Model\CredentialsInterface;
use Taqat\Tazman\Core\UserAccount\Domain\Model\UserAccountInterface;

/**
 * Interface CredentialsAuthenticatorInterface
 * @package Taqat\Tazman\Core\UserAccount\Domain\Service\Authenticator
 */
interface CredentialsAuthenticatorInterface
{
    /**
     * @param CredentialsInterface $credentials
     * @return null|UserAccountInterface
     */
    public function authenticate(CredentialsInterface $credentials): ?UserAccountInterface;
}
