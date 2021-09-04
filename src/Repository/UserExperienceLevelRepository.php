<?php

namespace App\Repository;

use App\Entity\UserExperienceLevel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UserExperienceLevel|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserExperienceLevel|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserExperienceLevel[]    findAll()
 * @method UserExperienceLevel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserExperienceLevelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserExperienceLevel::class);
    }

    // /**
    //  * @return UserExperienceLevel[] Returns an array of UserExperienceLevel objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UserExperienceLevel
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
