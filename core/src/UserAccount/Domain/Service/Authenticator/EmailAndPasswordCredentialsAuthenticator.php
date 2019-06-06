<?php
/**
 * Created by PhpStorm.
 * User: dmitrypliusnin
 * Date: 6/5/19
 * Time: 2:55 PM
 */

namespace Taqat\Tazman\Core\UserAccount\Domain\Service\Authenticator;

use Taqat\Tazman\Core\UserAccount\Infrastructure\Persistance\Doctrine\Domain\EntityManager\UserAccount\DoctrineUserAccountManager;
use Taqat\Tazman\Core\UserAccount\Infrastructure\Persistance\Doctrine\Domain\EntityRepository\EmailAndPasswordCredentials\DoctrineEmailAndPasswordCredentialsRepository;
use Taqat\Tazman\Core\UserAccount\Domain\Model\CredentialsInterface;
use Taqat\Tazman\Core\UserAccount\Domain\Model\EmailAndPasswordCredentials;
use Taqat\Tazman\Core\UserAccount\Domain\Model\UserAccountInterface;
use Taqat\Tazman\Core\UserAccount\Domain\Service\Credentials\PasswordEncoder;

/**
 * Class EmailAndPasswordCredentialsAuthenticator
 * @package Taqat\Tazman\Core\UserAccount\Domain\Service\Authenticator
 */
class EmailAndPasswordCredentialsAuthenticator implements CredentialsAuthenticatorInterface
{
    /**
     * @param EmailAndPasswordCredentials $credentials
     * @return null|UserAccountInterface
     * @throws \Doctrine\ORM\ORMException
     */
    public function authenticate(CredentialsInterface $credentials): ?UserAccountInterface
    {
        $em = new DoctrineUserAccountManager();
        /** @var DoctrineEmailAndPasswordCredentialsRepository $repo */
        $repo = $em->getRepository(EmailAndPasswordCredentials::class);
        $emailAndPasswordcredentials = $repo->findOneByEmail($credentials->getEmail());

        if (!$emailAndPasswordcredentials) {
            return null;
        }

        $passwordEncoder = new PasswordEncoder();
        $result = $passwordEncoder->isPasswordValid(
            $credentials->getPlainPassword(),
            $emailAndPasswordcredentials->getPassword(),
            $emailAndPasswordcredentials->getSalt()
        );

        if ($result) {
            return $emailAndPasswordcredentials->getUserAccount();
        }

        return null;
    }
}
