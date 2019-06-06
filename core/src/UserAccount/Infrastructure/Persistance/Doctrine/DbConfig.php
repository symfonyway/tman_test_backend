<?php
/**
 * Created by PhpStorm.
 * User: dmitrypliusnin
 * Date: 6/6/19
 * Time: 2:28 PM
 */

namespace Taqat\Tazman\Core\UserAccount\Infrastructure\Persistance\Doctrine;

/**
 * Class DbConfig
 * @package Taqat\Tazman\Core\UserAccount\Infrastructure\Persistance\Doctrine
 */
class DbConfig
{
    /**
     * @return array
     */
    public static function getConnection() :array
    {
        return [
            'driver' => 'pdo_pgsql',
            'user' => 'postgres',
            'password' => '12345',
            'dbname' => 'postgres',
            'host' => 'db',
            'port' => 5432
        ];
    }
}
