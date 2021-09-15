<?php

namespace App\Repository;

use App\Entity\Trip;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Trip|null find($id, $lockMode = null, $lockVersion = null)
 * @method Trip|null findOneBy(array $criteria, array $orderBy = null)
 * @method Trip[]    findAll()
 * @method Trip[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TripRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Trip::class);
    }

    // /**
    //  * @return Trip[] Returns an array of Trip objects
    //  */

    public function findOnTripWithDate($arrival, $departure, $date)
    {
        return $this->createQueryBuilder('trip')
            ->where('trip.departure = :departure')
            ->setParameter('departure', $departure)
            ->andWhere('trip.arrival = :arrival')
            ->setParameter('arrival', $arrival)
            ->andWhere('trip.date_of_trip = :date')
            ->setParameter('date', $date)
            ->orderBy('trip.date_of_trip', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    } 
    

    /*
    public function findOneBySomeField($value): ?Trip
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
