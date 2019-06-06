<?php
/**
 * Created by PhpStorm.
 * User: dmitrypliusnin
 * Date: 6/5/19
 * Time: 3:49 PM
 */

namespace Taqat\Tazman\Core\UserAccount\Domain\Model;

use MyCLabs\Enum\Enum;

/**
 * Class CredentialsType
 * @package Taqat\Tazman\Core\UserAccount\Domain\Model
 * @method static self EMAIL_AND_PASSWORD
 * @method static self FACEBOOK
 */
class CredentialsType extends Enum
{
    private const EMAIL_AND_PASSWORD = 'email';
    private const FACEBOOK = 'facebook';
}
