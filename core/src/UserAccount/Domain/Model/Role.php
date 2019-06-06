<?php
/**
 * Created by PhpStorm.
 * User: dmitrypliusnin
 * Date: 6/5/19
 * Time: 4:26 PM
 */

namespace Taqat\Tazman\Core\UserAccount\Domain\Model;

use MyCLabs\Enum\Enum;

/**
 * Class Role
 * @package Taqat\Tazman\Core\UserAccount\Domain\Model
 * @method static self ROLE_USER
 */
class Role extends Enum
{
    private const ROLE_USER = 'ROLE_USER';
}
