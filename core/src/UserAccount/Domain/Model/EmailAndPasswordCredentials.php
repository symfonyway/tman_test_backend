<?php
/**
 * Created by PhpStorm.
 * User: dmitrypliusnin
 * Date: 6/5/19
 * Time: 11:35 AM
 */

namespace Taqat\Tazman\Core\UserAccount\Domain\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Credentials
 * @package Taqat\Tazman\Core\UserAccount\Domain
 * @ORM\Entity(repositoryClass="Taqat\Tazman\Core\UserAccount\Infrastructure\Persistance\Doctrine\Domain\EntityRepository\EmailAndPasswordCredentials\DoctrineEmailAndPasswordCredentialsRepository")
 * @ORM\Table(name="email_credentials")
 */
class EmailAndPasswordCredentials implements CredentialsInterface
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $email;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $password;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $salt;

    /**
     * @var UserAccountInterface
     * @ORM\OneToOne(targetEntity="UserAccount")
     */
    protected $userAccount;

    public function __construct($email = null, $password = null)
    {
        $this->email = $email;
        $this->password = $password;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getSalt(): string
    {
        return $this->salt;
    }

    /**
     * @param string $salt
     * @return EmailAndPasswordCredentials
     */
    public function setSalt(string $salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return EmailAndPasswordCredentials
     */
    public function setEmail(string $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return EmailAndPasswordCredentials
     */
    public function setPassword(string $password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return UserAccountInterface
     */
    public function getUserAccount(): UserAccountInterface
    {
        return $this->userAccount;
    }

    /**
     * @param UserAccountInterface $userAccount
     * @return EmailAndPasswordCredentials
     */
    public function setUserAccount(UserAccountInterface $userAccount)
    {
        $this->userAccount = $userAccount;

        return $this;
    }

    /**
     * @return CredentialsType
     */
    public function getType(): CredentialsType
    {
        return CredentialsType::EMAIL_AND_PASSWORD();
    }

    /**
     * @return UserAccountInterface
     */
    public function getUser(): UserAccountInterface
    {
        return $this->getUserAccount();
    }

    /**
     * @param UserAccountInterface $userAccount
     */
    public function setUser(UserAccountInterface $userAccount): void
    {
        $this->setUserAccount($userAccount);
    }
}
