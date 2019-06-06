<?php
/**
 * Created by PhpStorm.
 * User: dmitrypliusnin
 * Date: 6/6/19
 * Time: 2:08 PM
 */

namespace Taqat\Tazman\Core\UserAccount\Infrastructure\Persistance\Doctrine\Domain\EntityRepository\EmailAndPasswordCredentials;

use Doctrine\ORM\EntityRepository;
use Taqat\Tazman\Core\UserAccount\Domain\Model\EmailAndPasswordCredentials;

/**
 * Class DoctrineEmailAndPasswordCredentialsRepository
 * @package Taqat\Tazman\Core\Infrastructure\Persistance\Doctrine\Domain\EntityRepository\EmailAndPasswordCredentials
 */
class DoctrineEmailAndPasswordCredentialsRepository extends EntityRepository
{
    /**
     * @param string $email
     * @return null|EmailAndPasswordCredentials
     */
    public function findOneByEmail(string $email) :?EmailAndPasswordCredentials
    {
        $qb = $this->createQueryBuilder('ep');
        $qb->where($qb->expr()->eq('ep.email', $qb->expr()->literal($email)));

        return $qb->getQuery()->getOneOrNullResult();
    }
}
