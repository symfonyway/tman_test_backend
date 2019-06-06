<?php
/**
 * Created by PhpStorm.
 * User: dmitrypliusnin
 * Date: 6/6/19
 * Time: 11:09 AM
 */

namespace Taqat\Tazman\Core\UserAccount\Domain\Service\Session;
use Taqat\Tazman\Core\UserAccount\Domain\Model\UserAccountInterface;

/**
 * Interface UserSessionManagerInterface
 * @package Taqat\Tazman\Core\UserAccount\Domain\Service\Session
 */
interface UserSessionManagerInterface
{
    /**
     * @param UserAccountInterface $userAccount
     */
    public function start(UserAccountInterface $userAccount): void;

    /**
     * Remove User data
     */
    public function invalidate(): void;

    /**
     * @return UserAccountInterface
     */
    public function getUser(): UserAccountInterface;
}
