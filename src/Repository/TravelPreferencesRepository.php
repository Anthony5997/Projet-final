<?php

namespace App\Repository;

use App\Entity\TravelPreferences;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TravelPreferences|null find($id, $lockMode = null, $lockVersion = null)
 * @method TravelPreferences|null findOneBy(array $criteria, array $orderBy = null)
 * @method TravelPreferences[]    findAll()
 * @method TravelPreferences[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TravelPreferencesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TravelPreferences::class);
    }

    // /**
    //  * @return TravelPreferences[] Returns an array of TravelPreferences objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TravelPreferences
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
