<?php
/**
 * Created by PhpStorm.
 * User: dmitrypliusnin
 * Date: 6/5/19
 * Time: 5:08 PM
 */

namespace Taqat\Tazman\Core\UserAccount\Domain\Service\Authenticator;

use Taqat\Tazman\Core\UserAccount\Domain\Model\CredentialsType;

/**
 * Class AuthenticatorFactory
 * @package Taqat\Tazman\Core\UserAccount\Domain\Service\Authenticator
 */
class AuthenticatorFactory
{
    /**
     * @param CredentialsType $type
     * @return EmailAndPasswordCredentialsAuthenticator
     * @throws InvalidCredentialsTypeException
     */
    public function getAuthenticator(CredentialsType $type)
    {
        switch ($type) {
            case CredentialsType::EMAIL_AND_PASSWORD():
                return $this->createEmailAndPasswordAuthenticator();
            default:
                throw new InvalidCredentialsTypeException();
        }
    }

    /**
     * @return EmailAndPasswordCredentialsAuthenticator
     */
    private function createEmailAndPasswordAuthenticator()
    {
        return new EmailAndPasswordCredentialsAuthenticator();
    }
}
