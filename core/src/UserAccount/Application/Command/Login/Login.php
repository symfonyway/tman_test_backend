<?php
/**
 * Created by PhpStorm.
 * User: dmitrypliusnin
 * Date: 6/5/19
 * Time: 11:11 AM
 */

namespace Taqat\Tazman\Core\UserAccount\Application\Command\Login;

use Taqat\Tazman\Core\UserAccount\Domain\Model\CredentialsInterface;
use Taqat\Tazman\Core\UserAccount\Domain\Model\UserAccountInterface;
use Taqat\Tazman\Core\UserAccount\Domain\Service\Authenticator\AuthenticatorFactory;
use Taqat\Tazman\Core\UserAccount\Domain\Service\Authenticator\InvalidCredentialsException;
use Taqat\Tazman\Core\UserAccount\Domain\Service\Credentials\EmailAndPasswordCredentialsNormalizer;
use Taqat\Tazman\Core\UserAccount\Domain\Service\Session\UserSessionManager;

/**
 * Class Login
 * @package Taqat\Tazman\Core\UserAccount\Application\Command\Login
 */
class Login implements LoginInterface
{
    /**
     * @param $credentials
     * @return UserAccountInterface
     * @throws \Exception
     */
    public function login(CredentialsInterface $credentials): UserAccountInterface
    {
        $normalizer = new EmailAndPasswordCredentialsNormalizer();
        $normalizedCredentials = $normalizer->normalize($credentials);

        $authenticatorFactory = new AuthenticatorFactory();
        $authenticator = $authenticatorFactory->getAuthenticator($credentials->getType());

        if (!$userAccount = $authenticator->authenticate($normalizedCredentials)) {
            throw new InvalidCredentialsException();
        }

        $userSessionManager = new UserSessionManager();
        $userSessionManager->start($userAccount);

        return $userAccount;
    }
}
