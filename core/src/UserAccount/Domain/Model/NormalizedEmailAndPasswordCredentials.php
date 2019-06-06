<?php
/**
 * Created by PhpStorm.
 * User: dmitrypliusnin
 * Date: 6/5/19
 * Time: 4:00 PM
 */

namespace Taqat\Tazman\Core\UserAccount\Domain\Model;

/**
 * Class NormalizedEmailAndPasswordCredentials
 * @package Taqat\Tazman\Core\UserAccount\Domain\Model
 */
class NormalizedEmailAndPasswordCredentials extends EmailAndPasswordCredentials
{
    /**
     * @var string
     */
    private $plainPassword;

    /**
     * @return string
     */
    public function getPlainPassword(): string
    {
        return $this->plainPassword;
    }

    /**
     * @param string $plainPassword
     * @return NormalizedEmailAndPasswordCredentials
     */
    public function setPlainPassword(string $plainPassword)
    {
        $this->plainPassword = $plainPassword;

        return $this;
    }
}
