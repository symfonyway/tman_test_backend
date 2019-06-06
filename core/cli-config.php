<?php
/**
 * Created by PhpStorm.
 * User: dmitrypliusnin
 * Date: 6/6/19
 * Time: 1:33 PM
 */

use Taqat\Tazman\Core\UserAccount\Infrastructure\Persistance\Doctrine\Domain\EntityManager\UserAccount\DoctrineUserAccountManager;

require_once "vendor/autoload.php";

$entityManager = new DoctrineUserAccountManager();

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);
