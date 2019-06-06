<?php
/**
 * Created by PhpStorm.
 * User: dmitrypliusnin
 * Date: 6/6/19
 * Time: 12:33 PM
 */

namespace Taqat\Tazman\Core\UserAccount\Domain\Service\Session;

use Symfony\Component\HttpFoundation\Session\Session;
use Taqat\Tazman\Core\UserAccount\Domain\Model\UserAccountInterface;

/**
 * Class UserSessionManager
 * @package Taqat\Tazman\Core\UserAccount\Domain\Service\Session
 */
class UserSessionManager implements UserSessionManagerInterface
{
    /**
     * @var Session
     */
    private $session;

    public function __construct()
    {
        $this->session = new Session();
    }

    /**
     * @param UserAccountInterface $userAccount
     */
    public function start(UserAccountInterface $userAccount): void
    {
        if (!$this->session->isStarted()) {
            $this->session->start();
        }

        $this->session->set('user', $userAccount);
    }

    /**
     * Remove User data
     */
    public function invalidate(): void
    {
        $this->session->invalidate();
    }

    /**
     * @return UserAccountInterface
     */
    public function getUser(): UserAccountInterface
    {
        $userAccount = $this->session->get('user');

        return $userAccount;
    }
}
