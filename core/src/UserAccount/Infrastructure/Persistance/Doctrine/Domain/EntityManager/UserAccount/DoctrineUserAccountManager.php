<?php
/**
 * Created by PhpStorm.
 * User: dmitrypliusnin
 * Date: 6/6/19
 * Time: 2:25 PM
 */

namespace Taqat\Tazman\Core\UserAccount\Infrastructure\Persistance\Doctrine\Domain\EntityManager\UserAccount;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;
use Taqat\Tazman\Core\UserAccount\Infrastructure\Persistance\Doctrine\DbConfig;

/**
 * Class DoctrineEmailAndPasswordCredentialsManager
 * @package Taqat\Tazman\Core\Infrastructure\Persistance\Doctrine\Domain\EntityManager\EmailAndPasswordCredentials
 */
class DoctrineUserAccountManager extends EntityManager
{
    /**
     * DoctrineEmailAndPasswordCredentialsManager constructor.
     * @throws \Doctrine\ORM\ORMException
     */
    public function __construct()
    {
        $config = Setup::createAnnotationMetadataConfiguration([__DIR__ . "/src/UserAccount/Domain/Model"], true, null, null, false);
        $connection = static::createConnection(DbConfig::getConnection(), $config);

        parent::__construct($connection, $config, $connection->getEventManager());
    }
}
