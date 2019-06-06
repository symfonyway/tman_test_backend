<?php
/**
 * Created by PhpStorm.
 * User: dmitrypliusnin
 * Date: 6/5/19
 * Time: 3:45 PM
 */

namespace Taqat\Tazman\Core\UserAccount\Domain\Model;


interface CredentialsInterface
{
    public function getType(): CredentialsType;

    public function getUser(): UserAccountInterface;

    public function setUser(UserAccountInterface $userAccount): void;
}
