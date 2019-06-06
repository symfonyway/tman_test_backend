<?php
/**
 * Created by PhpStorm.
 * User: dmitrypliusnin
 * Date: 6/5/19
 * Time: 11:37 AM
 */

namespace Taqat\Tazman\Core\UserAccount\Domain\Service\Credentials;

use Taqat\Tazman\Core\UserAccount\Domain\Model\CredentialsInterface;

/**
 * Interface CredentialsNormalizerInterface
 * @package Taqat\Tazman\Core\UserAccount\Domain\Service\Credentials
 */
interface CredentialsNormalizerInterface
{
    /**
     * @param CredentialsInterface $credentials
     * @return CredentialsInterface
     */
    public function normalize(CredentialsInterface $credentials) :CredentialsInterface;
}
