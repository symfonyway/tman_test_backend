<?php
/**
 * Created by PhpStorm.
 * User: dmitrypliusnin
 * Date: 6/5/19
 * Time: 2:49 PM
 */

namespace Taqat\Tazman\Core\UserAccount\Domain\Service\Credentials;

use Taqat\Tazman\Core\UserAccount\Domain\Model\CredentialsInterface;
use Taqat\Tazman\Core\UserAccount\Domain\Model\EmailAndPasswordCredentials;
use Taqat\Tazman\Core\UserAccount\Domain\Model\NormalizedEmailAndPasswordCredentials;

/**
 * Class EmailAndPasswordCredentialsNormalizer
 * @package Taqat\Tazman\Core\UserAccount\Domain\Service\Credentials
 */
class EmailAndPasswordCredentialsNormalizer implements CredentialsNormalizerInterface
{
    /**
     * @var CanonicalizerInterface
     */
    private $canonicalizer;

    /**
     * @var PasswordEncoderInterface
     */
    private $passwordEncoder;

    public function __construct()
    {
        $this->canonicalizer = new Canonicalizer();
        $this->passwordEncoder = new PasswordEncoder();
    }

    /**
     * @param CredentialsInterface $credentials
     * @return NormalizedEmailAndPasswordCredentials
     * @throws \Exception
     */
    public function normalize(CredentialsInterface $credentials) :CredentialsInterface
    {
        $normalized = new NormalizedEmailAndPasswordCredentials();
        $normalized->setEmail($this->canonicalizer->canonicalize($credentials->getEmail()));
        $normalized->setPlainPassword($credentials->getPassword());
        $normalized->setSalt(bin2hex(random_bytes(22)));
        $normalized->setPassword($this->passwordEncoder->encodePassword(
            $credentials->getPassword(),
            $normalized->getSalt()
        ));

        return $normalized;
    }
}
