<?php
/**
 * Created by PhpStorm.
 * User: dmitrypliusnin
 * Date: 6/5/19
 * Time: 11:13 AM
 */

namespace Taqat\Tazman\Core\UserAccount\Application\Command\Login;

use Taqat\Tazman\Core\UserAccount\Domain\Model\CredentialsInterface;
use Taqat\Tazman\Core\UserAccount\Domain\Model\UserAccountInterface;

interface LoginInterface
{
    public function login(CredentialsInterface $credentials) :UserAccountInterface;
}
