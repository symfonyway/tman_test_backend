<?php
/**
 * Created by PhpStorm.
 * User: dmitrypliusnin
 * Date: 6/5/19
 * Time: 11:14 AM
 */

namespace Taqat\Tazman\Core\UserAccount\Domain\Model;

/**
 * Interface UserAccountInterface
 * @package Taqat\Tazman\Core\UserAccount\Domain\Model
 */
interface UserAccountInterface
{
    public function getId() :int;

    public function getRoles();
}
